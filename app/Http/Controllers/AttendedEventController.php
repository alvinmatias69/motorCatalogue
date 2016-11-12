<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\QueryException as QueryException;

use App\Http\Requests;

use App\AttendedEvent;

class AttendedEventController extends Controller
{
    public function attendEvent(Request $request){
    	$attendedEvent = new AttendedEvent();
    	try{
	    	$attendedEvent->idCalendar = $request->input('idCalendar');
	    	$attendedEvent->idEvent = $request->input('idEvent');
	    	$attendedEvent->save();
	    	return response()->json(['code' => 'SUCCESS_POST', 'message' => 'OK', 'content' => []]);
	    }catch(QueryException $e){
	    	return response()->json(['code' => 'FAILURE_POST', 'message' => 'Could not find event or user', 'content' => []]);
	    }

    }
}
