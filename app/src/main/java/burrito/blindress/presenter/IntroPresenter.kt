package burrito.blindress.presenter

import android.content.Context.SENSOR_SERVICE
import android.hardware.SensorManager
import android.support.annotation.RawRes
import burrito.blindress.App
import burrito.blindress.R
import burrito.blindress.model.InformationModel
import burrito.blindress.view.IntroView
import com.squareup.seismic.ShakeDetector


/**
 * Created by Sergey Koltsov on 22.04.2017.
 */

class IntroPresenter(val view: IntroView) {

    private var speaking: Boolean = false

    init {
        if (!InformationModel.instance.isFirstTime()) {
            startChoiceActivity()
        } else {
            speaking = true
            view.sayIntro(introductionSpeech())
        }

        val sensorManager = App.instance.getSystemService(SENSOR_SERVICE) as SensorManager
        val sd = ShakeDetector(view.getShakerListener())
        sd.start(sensorManager)
        sd.setSensitivity(15)
    }

    private fun startChoiceActivity() {
        view.startChoiceActivity()
    }

    fun onButtonClick() {
        view.startInstructionsScreen()
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

    fun onHearShake() {
        if (!speaking) {
            speaking = true
            view.repeatIntro(introductionSpeech())
        }
    }

    fun onSpeechEnded() {
        speaking = false
    }
}

data class Phrase(@RawRes val audio: Int, val delayAfter: Int)