package burrito.blindress.activities

import android.media.MediaPlayer
import android.os.Bundle
import android.support.v7.app.AppCompatActivity
import android.view.Gravity
import burrito.blindress.R
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
}

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
                            .subscribe()

                }
            }.lparams(width = matchParent,
                    height = matchParent)
        }
    }

    // 10.240.18.96: 8000
}