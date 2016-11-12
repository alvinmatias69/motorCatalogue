<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $table = 'accessories';

    public $timestamps = false;

    public function motorcycle(){
    	return $this->belongsTo('App\Motocycle', 'idMotorcycle');
    }
}
