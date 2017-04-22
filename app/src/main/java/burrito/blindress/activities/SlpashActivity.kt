package burrito.blindress.activities

import android.content.Intent
import android.media.MediaPlayer
import android.os.Bundle
import android.support.v7.app.AppCompatActivity
import android.view.Gravity
import burrito.blindress.R
import burrito.blindress.ui.SplashUI
import io.reactivex.Observable
import org.jetbrains.anko.*

/**
 * @author kitttn
 */

class SplashActivity : AppCompatActivity() {
    lateinit var player: MediaPlayer

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        SplashUI().setContentView(this)
        player = MediaPlayer.create(this, R.raw.hello)
    }

    fun startInstructionsActivity() {
        val intent = Intent(this, InstructionsActivity::class.java)
        startActivity(intent)
    }
}