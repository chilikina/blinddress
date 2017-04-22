package burrito.blindress.presenter

import burrito.blindress.view.ChoiceView

/**
 * Created by Sergey Koltsov on 23.04.2017.
 */

class ChoicePresenter(private val view: ChoiceView) {
    fun onAddClick() {
        view.startInstructionsScreen()
    }
}