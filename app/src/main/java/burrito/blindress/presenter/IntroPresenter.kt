package burrito.blindress.presenter

import android.support.annotation.RawRes
import burrito.blindress.R
import burrito.blindress.model.InformationModel
import burrito.blindress.view.IntroView

/**
 * Created by Sergey Koltsov on 22.04.2017.
 */

class IntroPresenter(val view: IntroView) {

    init {
        if (!InformationModel.instance.isFirstTime()) {
            startChoiceActivity()
        } else {
            view.sayIntro(introductionSpeech())
        }
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
}

data class Phrase(@RawRes val audio: Int, val delayAfter: Int)