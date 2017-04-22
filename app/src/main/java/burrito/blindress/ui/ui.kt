package burrito.blindress.ui

import android.media.MediaPlayer
import android.view.Gravity
import burrito.blindress.R
import burrito.blindress.activities.InstructionsActivity
import burrito.blindress.activities.SplashActivity
import io.reactivex.Observable
import org.jetbrains.anko.*

/**
 * @author kitttn
 */

class SplashUI : AnkoComponent<SplashActivity> {
    override fun createView(ui: AnkoContext<SplashActivity>) = with(ui) {
        val activity = ui.owner
        verticalLayout {
            val btnStart = button(R.string.start_text) {
                text = ui.ctx.getString(R.string.start_text)
                textSize = 24f
                horizontalGravity = Gravity.CENTER
                verticalGravity = Gravity.CENTER
                onClick {
                    Observable.just(R.raw.hello, R.raw.i_need_your_cloths)
                            //.delay(2000, TimeUnit.MILLISECONDS)
                            .doOnNext {
                                activity.player = MediaPlayer.create(ui.ctx, it)
                            }
                            .flatMap {
                                Observable.create<Boolean> { sub ->
                                    activity.player.start()
                                    activity.player.setOnCompletionListener {
                                        it.release()
                                        sub.onNext(true)
                                        sub.onComplete()
                                    }
                                }
                            }
                            .subscribe({}, {}, {
                                activity.startInstructionsActivity()
                            })

                }
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
                onClick { ui.owner.dispatchTakePictureIntent() }
            }
        }
    }

}