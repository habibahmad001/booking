<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public $timestamps = true;
    protected $table = 'tableevents';

    protected $fillable = [
        'id', 'note', 'eventStartdate', 'eventEnddate', 'eventStarttime', 'eventEndtime', 'eventColor', 'eventResource', 'EventId', 'UserId', 'lag', 'ledare', 'status'
    ];
}
