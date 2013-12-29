<?php namespace Vinicius73\SEO\Facades;

use Illuminate\Support\Facades\Facade;

class Robots extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Vinicius73.seo.generators.robots'; }
}