package burrito.blindress

import android.app.Application

/**
 * Created by Sergey Koltsov on 22.04.2017.
 */

class App : Application() {

    override fun onCreate() {
        super.onCreate()
        instance = this
    }

    companion object {
        lateinit var instance: App
            private set
    }
}