<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceInfo extends Model
{
	protected $table = 'serviceInfos';

    protected $primaryKey = null;

    public $incrementing = false;

    public $timestamps = false;

    public function motorcycle(){
    	return $this->belongsTo('App\Motorcycle', 'idMotorcycle');
    }
}
