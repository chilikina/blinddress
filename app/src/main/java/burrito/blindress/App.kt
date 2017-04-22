package burrito.blindress

import android.app.Application

/**
 * Created by Sergey Koltsov on 22.04.2017.
 */

class App : Application() {
    private object Holder {
        val INSTANCE = App()
    }

    companion object {
        val instance: App by lazy { Holder.INSTANCE }
    }
}