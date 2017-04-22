package burrito.blindress.ui

import android.view.Gravity
import burrito.blindress.R
import burrito.blindress.activities.AnalyzeActivity
import burrito.blindress.activities.ChoiceActivity
import burrito.blindress.activities.InstructionsActivity
import burrito.blindress.activities.IntroActivity
import org.jetbrains.anko.*

/**
 * @author kitttn
 */

class IntroUI : AnkoComponent<IntroActivity> {
    override fun createView(ui: AnkoContext<IntroActivity>) = with(ui) {
        val activity = ui.owner
        verticalLayout {
            button(R.string.start_text) {
                text = ui.ctx.getString(R.string.start_text)
                textSize = 24f
                horizontalGravity = Gravity.CENTER
                verticalGravity = Gravity.CENTER
                onClick { activity.presenter.onButtonClick() }
            }.lparams(width = matchParent,
                    height = matchParent)
        }
    }
}

class InstructionsUI : AnkoComponent<InstructionsActivity> {
    override fun createView(ui: AnkoContext<InstructionsActivity>) = with(ui) {
        verticalLayout {
            textView(context.getText(R.string.two_steps))
            textView(context.getText(R.string.scan_clothing))
            textView(context.getText(R.string.give_app_voice_instruction))
            button(context.getString(R.string.start)) {
                onClick { startActivity<AnalyzeActivity>() }
            }
        }
    }

}

class AnalyzeUI : AnkoComponent<AnalyzeActivity> {
    override fun createView(ui: AnkoContext<AnalyzeActivity>) = with(ui) {
        verticalLayout {
            button("Record") {
                onClick { ui.owner.rec.startRecording() }
            }
            button("Stop") {
                onClick { ui.owner.rec.stopRecording() }
            }
            button("Play") {
                onClick { ui.owner.rec.playback() }
            }
        }
    }
}

class ChoiceUI : AnkoComponent<ChoiceActivity> {
    override fun createView(ui: AnkoContext<ChoiceActivity>) = with(ui) {
        verticalLayout {
            button {
                text = "Generate"
                lparams {
                    weight = 1f
                    width = matchParent
                    height = matchParent
                }
            }
            button {
                text = "Add"
                lparams {
                    weight = 1f
                    width = matchParent
                    height = matchParent
                }
                onClick { ui.owner.presenter.onAddClick() }
            }
        }
    }
}