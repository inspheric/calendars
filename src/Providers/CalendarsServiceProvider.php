<?php

namespace Inspheric\Calendars\Providers;

use Inspheric\Support\Providers\PackageServiceProvider;
use Inspheric\Calendars\Calendar;

class CalendarsServiceProvider extends PackageServiceProvider
{
    protected $name = 'calendars';

    protected $namespace = 'Inspheric\Calendars\Http\Controllers';

    public function bindRoutes()
    {
        $this->bindModel('calendars', Calendar::class);
    }

}
