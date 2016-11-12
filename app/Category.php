<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public $timestamps = false;

    public function scopegetMotorcycles($query, $category){
        if ($query->find($category) == null) {
            return null;
        }
        return $query->find($category)->motorcycles()->simplePaginate(10);
    }

    public function scopegetPageCategories($query){
    	return $query->simplePaginate(10);
    }

    public function motorcycles(){
    	return $this->hasMany('App\Motorcycle', 'idCategory', 'id');
    }
}
