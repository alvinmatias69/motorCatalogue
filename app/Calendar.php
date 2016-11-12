<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public $timestamps = false;

    public function attendedEvent(){
    	return $this->hasMany('App\AttendedEvent', 'idCalendar');
    }
}
