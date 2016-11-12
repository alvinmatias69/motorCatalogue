<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{    
    public $timestamps = false;

    public function accessories(){
    	return $this->hasMany('App\Accessory', 'idMotorcycle');
    }

    public function pictures(){
    	return $this->hasMany('App\Picture', 'idMotorcycle');
    }

    public function category(){
    	return $this->belongsTo('App\Category', 'idCategory');
    }

    public function feature(){
        return $this->hasOne('App\Feature', 'idMotorcycle');
    }

    public function serviceInfo(){
        return $this->hasOne('App\ServiceInfo', 'idMotorcycle');
    }

    public function specification(){
        return $this->hasOne('App\Specification', 'idMotorcycle');
    }

    public function scopegetDetailMotorcycle($query, $id){
        return $query->with(['feature', 'specification', 'serviceInfo', 'pictures', 'accessories'])->find($id);
    }

    public function scopegetAccessories($query, $id){
        return $query->find($id)->accessories()->get();
    }
}
