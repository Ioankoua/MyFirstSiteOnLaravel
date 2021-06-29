<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response; 
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Main_texts;

class CookieController extends Controller
{

    public function setCook(Request $request) 
    { 
    	$lib_text = new Main_texts;
    	$minutes = 60 * 24 * 30;
      $response = new Response(redirect()->route('main'));
      $response->withCookie(cookie('name', '1', $minutes)); 
      return $response;   
    } 

    public function getCookie(Request $request) 
    { 
   	    $value = $request->cookie('name');

   	    if ($value == null) {
   	      return CookieController::setCook($request);
   	    }else{
   	    	return redirect()->route('hello');	
   	    }  
    }  

}

