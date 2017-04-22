package burrito.blindress.activities

import android.media.MediaPlayer
import android.os.Bundle
import android.support.annotation.RawRes
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
        var n = 0
        Observable.fromIterable(introductionSpeech())
                .concatMap {
                    n++
                    player = MediaPlayer.create(this, it.audio)
                    Observable.create<Boolean> { sub ->
                        player.start()
                        player.setOnCompletionListener {
                            it.release()
                            sub.onNext(true)
                            sub.onComplete()
                        }
                    }
                }
                .subscribe()
    }

    fun introductionSpeech(): List<Phrase> {
        val list = ArrayList<Phrase>()
        list.add(Phrase(R.raw.hello, 0))
        list.add(Phrase(R.raw.i_need_your_cloths, 3))
        list.add(Phrase(R.raw.xa_xa, 1))
        list.add(Phrase(R.raw.kidding, 1))
        list.add(Phrase(R.raw.prepare_your_clothes, 0))
        return list
    }
}

class SplashUI : AnkoComponent<SplashActivity> {
    override fun createView(ui: AnkoContext<SplashActivity>) = with(ui) {
        verticalLayout {
            button(R.string.start_text) {
                text = ui.ctx.getString(R.string.start_text)
                textSize = 24f
                horizontalGravity = Gravity.CENTER
                verticalGravity = Gravity.CENTER
                onClick {
                    // start next activity
                }
            }.lparams(width = matchParent,
                    height = matchParent)
        }
    }

    // 10.240.18.96: 8000
}

data class Phrase(@RawRes val audio: Int, val delayAfter: Int)