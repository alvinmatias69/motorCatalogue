<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Motorcycle;

class MotorcycleController extends Controller
{
    public function show($id){
    	if (Motorcycle::find($id) == null) {
    		return response()->json(['code' => 'FAILURE_GET', 'message' => 'Could not find motorcycle', 'content' => null]);
    	}
    	$motorcycle = Motorcycle::getDetailMotorcycle($id);
    	return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $motorcycle]);
    }

    public function showAccessories($id){
    	if (Motorcycle::find($id) == null) {
    		return response()->json(['code' => 'FAILURE_GET', 'message' => 'Could not find motorcycle', 'content' => null]);
    	}
    	$accessories = Motorcycle::getAccessories($id);
    	return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $accessories]);
    }
}
