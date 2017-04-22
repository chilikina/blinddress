package burrito.blindress.activities

import android.app.Activity
import android.content.Intent
import android.os.Bundle
import android.os.Environment
import android.provider.MediaStore
import android.support.v4.content.FileProvider
import android.support.v7.app.AppCompatActivity
import burrito.blindress.ui.InstructionsUI
import org.jetbrains.anko.setContentView
import java.io.File
import java.text.DateFormat
import android.graphics.BitmapFactory
import android.graphics.Bitmap
import android.net.Uri
import android.opengl.ETC1.getHeight
import android.opengl.ETC1.getWidth
import java.text.SimpleDateFormat
import java.util.*


/**
 * @author kitttn
 */

class InstructionsActivity : AppCompatActivity() {
    val REQUEST_IMAGE_CAPTURE = 1000
    private var fileUri: Uri? = null

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        InstructionsUI().setContentView(this)
    }

    private fun createImageFile(): File {
        // Create an image file name
        val timeStamp = SimpleDateFormat("HHmmss", Locale.ENGLISH).format(Date())
        val storageDir = getExternalFilesDir(Environment.DIRECTORY_PICTURES)
        return File.createTempFile("JPEG_$timeStamp", ".jpg", storageDir)
    }

    fun dispatchTakePictureIntent() {
        val takePictureIntent = Intent(MediaStore.ACTION_IMAGE_CAPTURE);
        val photoFile = createImageFile()

        fileUri = FileProvider.getUriForFile(this, "com.example.android.fileprovider", photoFile)
        takePictureIntent.putExtra(MediaStore.EXTRA_OUTPUT, fileUri)
        startActivityForResult(takePictureIntent, REQUEST_IMAGE_CAPTURE)
    }

    override fun onActivityResult(requestCode: Int, resultCode: Int, data: Intent?) {
        if (requestCode == REQUEST_IMAGE_CAPTURE && resultCode == Activity.RESULT_OK) {
            println("Got photo: $fileUri")
        }
    }
}