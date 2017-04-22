package burrito.blindress.activities

import android.os.Bundle
import android.support.v7.app.AppCompatActivity
import burrito.blindress.ui.ChoiceUI
import org.jetbrains.anko.setContentView

/**
 * Created by Sergey Koltsov on 23.04.2017.
 */

class ChoiceActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        ChoiceUI().setContentView(this)
    }
}