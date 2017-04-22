package burrito.blindress.activities

import android.os.Bundle
import android.support.v7.app.AppCompatActivity
import android.widget.Toast
import burrito.blindress.R
import org.jetbrains.anko.*

/**
 * @author kitttn
 */

class SplashActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        SplashUI().setContentView(this)
    }
}

class SplashUI : AnkoComponent<SplashActivity> {
    override fun createView(ui: AnkoContext<SplashActivity>) = with(ui) {
        verticalLayout {
            editText(R.string.hello_world) {
                textSize = 24f
                hint = "Yoyo"
                textChangedListener {
                    onTextChanged { text, i1, i2, i3 -> Toast.makeText(ui.ctx, text, Toast.LENGTH_SHORT).show() }
                }
            }
        }
    }

    // 10.240.18.96: 8000
}