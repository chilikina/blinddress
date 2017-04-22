package burrito.blindress.activities

import android.os.Bundle
import android.support.v7.app.AppCompatActivity
import burrito.blindress.ui.InstructionsUI
import org.jetbrains.anko.setContentView

/**
 * @author kitttn
 */

class InstructionsActivity: AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        InstructionsUI().setContentView(this)
    }
}