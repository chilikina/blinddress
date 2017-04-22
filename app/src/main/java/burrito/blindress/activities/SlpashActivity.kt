package burrito.blindress.activities

import android.os.Bundle
import android.support.v7.app.AppCompatActivity
import burrito.blindress.ui.SplashUI
import org.jetbrains.anko.setContentView

/**
 * @author kitttn
 */

class SplashActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        SplashUI().setContentView(this)
    }
}