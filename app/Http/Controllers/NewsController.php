<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\News;

class NewsController extends Controller
{
	public function index(){
		$news = News::All();
		return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $news]);
	}

    public function show($id){
    	$news = News::find($id);
    	if (!$news) {
    		return response()->json(['code' => 'FAILURE_GET', 'message' => 'Could not find news', 'content' => $news]);
    	}
    	return response()->json(['code' => 'SUCCESS_GET', 'message' => 'OK', 'content' => $news]);
    }
}
