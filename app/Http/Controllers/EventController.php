<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Event;

class EventController extends Controller
{
    public function show($id){
    	$event = Event::find($id);
    	if (!$event) {
    		return response()->json(['code' => 'FAILURE_GET', 'message' => 'Could not find event', 'content' => $event]);
    	}
    	return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $event]);
    }

    public function distance($id, Request $request){
    	$distance = Event::distanceCalculate($id, $request->input('lat'), $request->input('long'));
    	if ($distance == -1) {
    		return response()->json(['code' => 'FAILURE_GET', 'message' => 'Could not find event', 'content' => []]);	
    	}
    	return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => ['distance' => $distance]]);	
    }

    public function getInDistance(Request $request){
        $events = Event::all();
        $listEvent = [];
        foreach ($events as $event) {
            if (sqrt(pow($event->lat - $request->input('lat'), 2) + pow($event->lat - $request->input('lat'), 2)) <= 10) {
                array_push($listEvent, $event);
            }
        }
        return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $listEvent]);
    }
}
