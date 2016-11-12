<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller
{
    public function getALlCategory(){
    	$category = Category::getPageCategories();
    	return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $category]);
    }

    public function getMotorbyCategory($category){
    	$motorcycle = Category::getMotorcycles($category);
    	return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $motorcycle]);
    }
}
