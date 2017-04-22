package burrito.blindress.ui

import android.media.MediaPlayer
import android.view.Gravity
import android.widget.Toast
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
                                ui.owner.player = MediaPlayer.create(ui.ctx, it)
                            }
                            .flatMap {
                                Observable.create<Boolean> { sub ->
                                    ui.owner.player.start()
                                    ui.owner.player.setOnCompletionListener {
                                        it.release()
                                        sub.onNext(true)
                                        sub.onComplete()
                                    }
                                }
                            }
                            .subscribe({}, {}, {})

                }
            }.lparams(width = matchParent,
                    height = matchParent)
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