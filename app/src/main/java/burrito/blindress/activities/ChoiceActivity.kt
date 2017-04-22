package burrito.blindress.activities

import android.content.Intent
import android.os.Bundle
import android.support.v7.app.AppCompatActivity
import burrito.blindress.presenter.ChoicePresenter
import burrito.blindress.ui.ChoiceUI
import burrito.blindress.view.ChoiceView
import org.jetbrains.anko.setContentView

/**
 * Created by Sergey Koltsov on 23.04.2017.
 */

class ChoiceActivity : AppCompatActivity(), ChoiceView {

    lateinit var presenter : ChoicePresenter

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        ChoiceUI().setContentView(this)

        presenter = ChoicePresenter(this)
    }

    override fun startInstructionsScreen() {
        startActivity(Intent(this, InstructionsActivity::class.java))
        finish()
    }
}