<?php namespace GovTribe\Mixpanel\Facades;

use Illuminate\Support\Facades\Facade;

class Mixpanel extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'mixpanel'; }

}
