<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
	public function index()
 	{
 		return view('ifelse.index');
    
	}

	public function show(Request $request)
 	{ 
 		$age = $request->input('Age');
		if($age < 40){
			$message = 'you are a young person';
		} else 
		{
			$message = 'you are an elderly person'; 
		}

 		return view('ifelse.result')->with('message',$message);
    
	}
}