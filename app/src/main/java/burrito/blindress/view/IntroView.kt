package burrito.blindress.view

import burrito.blindress.presenter.Phrase

/**
 * Created by Sergey Koltsov on 22.04.2017.
 */
interface IntroView {
    fun startInstructionsScreen()

    fun startChoiceActivity()

    fun sayIntro(introductionSpeech: List<Phrase>)
}
