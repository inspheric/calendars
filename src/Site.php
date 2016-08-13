<?php

namespace Inspheric\Calendars;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Inspheric\Support\Traits\Nameable;
use Inspheric\Sites\Traits\Siteable;

class Calendar extends Model
{
    use Notifiable;
    use Nameable;
    use Siteable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

}
