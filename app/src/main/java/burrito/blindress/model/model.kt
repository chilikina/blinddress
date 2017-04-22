package burrito.blindress.model

import android.content.Context
import android.content.SharedPreferences
import burrito.blindress.App

/**
 * Created by Sergey Koltsov on 22.04.2017.
 */

class InformationModel private constructor() {

    val APP_SHARED_PREFS: String = "blindress_shared_prefs"
    val FIRST_TIME: String = "is_first_time"

    init {
    }

    private object Holder {
        val INSTANCE = InformationModel()
    }

    companion object {
        val instance: InformationModel by lazy { Holder.INSTANCE }
    }

    fun isFirstTime(): Boolean {
        val sp: SharedPreferences = App.instance.getSharedPreferences(APP_SHARED_PREFS, Context.MODE_PRIVATE)
        return sp.getBoolean(FIRST_TIME, false)
    }
}