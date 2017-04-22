package burrito.blindress.view

import com.squareup.seismic.ShakeDetector

/**
 * Created by Sergey Koltsov on 23.04.2017.
 */

interface BaseView : ShakeDetector.Listener {
    fun getShakerListener(): ShakeDetector.Listener
}