package burrito.blindress.activities

import android.content.Intent
import android.media.MediaPlayer
import android.os.Bundle
import android.support.v7.app.AppCompatActivity
import burrito.blindress.presenter.IntroPresenter
import burrito.blindress.presenter.Phrase
import burrito.blindress.ui.IntroUI
import burrito.blindress.view.IntroView
import io.reactivex.Observable
import org.jetbrains.anko.setContentView

/**
 * @author kitttn
 */

class IntroActivity : AppCompatActivity(), IntroView {
    override fun startChoiceActivity() {
        startActivity(Intent(this, ChoiceActivity::class.java))
        player.stop()
        player.release()
        finish()
    }

    override fun startInstructionsScreen() {
        startActivity(Intent(this, InstructionsActivity::class.java))
        player.stop()
        player.release()
        finish()
    }

    lateinit var player: MediaPlayer
    lateinit var presenter: IntroPresenter

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        IntroUI().setContentView(this)

        presenter = IntroPresenter(this)
    }

    override fun sayIntro(speech: List<Phrase>) {
        Observable.fromIterable(speech)
                .concatMap {
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
}