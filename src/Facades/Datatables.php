<?php

namespace Boparaiamrit\Datatables\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class Datatables.
 *
 * @package Boparaiamrit\Datatables\Facades
 * @author  Arjay Angeles <aqangeles@gmail.com>
 */
class Datatables extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datatables';
    }
}
