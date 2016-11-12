<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendedEvent extends Model
{
    protected $table = 'attendedEvents';

    public $timestamps = false;

    protected $fillable = [
    	'idEvent', 'idCalendar',
    ];

    public function events(){
    	return $this->belongsTo('App\Event', 'idEvent');
    }

    public function calendars(){
    	return $this->belongsTo('App\Calendar', 'idCalendar');
    }
}
