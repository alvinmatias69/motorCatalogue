<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Accessory;

class AccessoryController extends Controller
{
	public function index(){
		$accessory = Accessory::all();
		if (count($accessory) < 1) {
			return response()->json(['code' => 'FAILURE_GET', 'message' => 'No data found', 'content' => []]);	
		}
		$accessory = Accessory::simplePaginate(10);
		return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $accessory]);
	}

    public function show($id){
    	$accessory = Accessory::find($id);
    	return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $accessory]);
    }
}
