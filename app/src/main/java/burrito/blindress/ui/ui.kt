package burrito.blindress.ui

import android.widget.Toast
import burrito.blindress.R
import burrito.blindress.activities.InstructionsActivity
import burrito.blindress.activities.SplashActivity
import org.jetbrains.anko.*

/**
 * @author kitttn
 */

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
}

class InstructionsUI : AnkoComponent<InstructionsActivity> {
    override fun createView(ui: AnkoContext<InstructionsActivity>) = with(ui) {
        linearLayout {
            textView(R.string.two_steps).lparams { width = matchParent }
            textView(R.string.scan_clothing).lparams { topMargin = 24}
            textView(R.string.give_app_voice_instruction).lparams { topMargin = 24}
        }
    }

}