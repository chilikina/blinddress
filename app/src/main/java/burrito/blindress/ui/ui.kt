package burrito.blindress.ui

import android.view.Gravity
import burrito.blindress.R
import burrito.blindress.activities.ChoiceActivity
import burrito.blindress.activities.InstructionsActivity
import burrito.blindress.activities.SplashActivity
import org.jetbrains.anko.*

/**
 * @author kitttn
 */

class SplashUI : AnkoComponent<SplashActivity> {
    override fun createView(ui: AnkoContext<SplashActivity>) = with(ui) {
        verticalLayout {
            button(R.string.start_text) {
                text = ui.ctx.getString(R.string.start_text)
                textSize = 24f
                horizontalGravity = Gravity.CENTER
                verticalGravity = Gravity.CENTER
                onClick { ui.owner.presenter.onButtonClick() }
            }.lparams(width = matchParent,
                    height = matchParent)
        }
    }
}

class InstructionsUI : AnkoComponent<InstructionsActivity> {
    override fun createView(ui: AnkoContext<InstructionsActivity>) = with(ui) {
        linearLayout {
            textView(R.string.two_steps).lparams { width = matchParent }
            textView(R.string.scan_clothing).lparams { topMargin = 24 }
            textView(R.string.give_app_voice_instruction).lparams { topMargin = 24 }
        }
    }
}

class ChoiceUI : AnkoComponent<ChoiceActivity> {
    override fun createView(ui: AnkoContext<ChoiceActivity>) = with(ui) {
        verticalLayout {
            button {
                lparams {
                    weight = 1f
                    width = matchParent
                    height = matchParent
                }
            }
            button {
                lparams {
                    weight = 1f
                    width = matchParent
                    height = matchParent
                }
            }
        }
    }
}