package burrito.blindress.assets

import android.Manifest
import android.content.Intent
import android.content.pm.PackageManager
import android.media.MediaPlayer
import android.media.MediaRecorder
import android.os.Bundle
import android.os.Environment
import android.support.v4.app.ActivityCompat
import android.support.v4.content.ContextCompat
import android.support.v7.app.AppCompatActivity
import io.reactivex.disposables.Disposable
import io.reactivex.subjects.PublishSubject
import java.io.File
import java.text.SimpleDateFormat
import java.util.*

/**
 * @author kitttn
 */

val recordAudioPermission = Manifest.permission.RECORD_AUDIO
val onGotPermissionSubject = PublishSubject.create<Boolean>()

class AppMediaRecorder(private val activity: AppCompatActivity) {
    private var mediaRecorder = MediaRecorder()
    private var subscription: Disposable? = null
    private var fileName: String = "tempFile"
    private var recording = false

    private fun record() {
        mediaRecorder = MediaRecorder()
        mediaRecorder.setAudioSource(MediaRecorder.AudioSource.MIC)
        mediaRecorder.setOutputFormat(MediaRecorder.OutputFormat.DEFAULT)
        mediaRecorder.setOutputFile(fileName)
        mediaRecorder.setAudioEncoder(MediaRecorder.AudioEncoder.DEFAULT)
        mediaRecorder.prepare()

        mediaRecorder.start()
        recording = true
    }

    fun startRecording() {
        if (recording)
            return

        val timeStamp = System.currentTimeMillis()
        val storageDir = activity.getExternalFilesDir(Environment.DIRECTORY_MUSIC)
        fileName = File.createTempFile("VOICE_$timeStamp", ".ac3", storageDir).absolutePath

        val result = ContextCompat.checkSelfPermission(activity, recordAudioPermission)
        if (result == PackageManager.PERMISSION_GRANTED)
            record()
        else {
            subscription = onGotPermissionSubject.subscribe {
                println("Success: $it")
                if (it)
                    record()
            }
            activity.startActivity(Intent(activity, MediaRecorderPermissionActivity::class.java))
        }
    }

    fun stopRecording() {
        if (!recording)
            return

        recording = false
        mediaRecorder.stop()
        mediaRecorder.release()
    }

    fun playback() {
        val player = MediaPlayer()
        player.setDataSource(fileName)
        player.prepare()
        player.start()
    }

    fun clear() {
        subscription?.dispose()
    }
}

class MediaRecorderPermissionActivity : AppCompatActivity() {
    val recordAudioRequestCode = 1002

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        ActivityCompat.requestPermissions(this, Array(1) { recordAudioPermission }, recordAudioRequestCode)
    }

    override fun onRequestPermissionsResult(requestCode: Int, permissions: Array<out String>, grantResults: IntArray) {
        if (requestCode == recordAudioRequestCode) {
            onGotPermissionSubject.onNext(grantResults[0] == PackageManager.PERMISSION_GRANTED)
            println("Result: $permissions; $grantResults")
        }
        super.onRequestPermissionsResult(requestCode, permissions, grantResults)
        finish()
    }
}