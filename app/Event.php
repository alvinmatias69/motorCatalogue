<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;

class Event extends Model
{
    public $timestamps = false;

    public function attendedEvent(){
    	return $this->hasMany('App\AttendedEvent', 'idEvent');
    }

    public function scopedistanceCalculate($query, $id, $lat, $long){
    	try {
    		$event = $query->findOrFail($id);
    		return sqrt(pow($event->lat - $lat, 2) + pow($event->long - $long, 2));
    	} catch (ModelNotFoundException $e) {
    		return (-1);
    	}
    }
}
