<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $primaryKey = null;

    public $incrementing = false;

    public $timestamps = false;

    public function motorcycle(){
    	return $this->belongsTo('App\Motorcycle', 'idMotorcycle');
    }
}
