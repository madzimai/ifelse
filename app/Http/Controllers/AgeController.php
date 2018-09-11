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
		$gender = $request->input('Gender');
		$message ='';
		if($age < 40) {
			if($gender == 'female'){
				$message = ' you are a girl';
			}else {
				$message = ' you are a boy ';
			}
		} else 	{
			if($gender == 'female'){
				$message = ' gogo'; 
			} else{
				$message = 'sekuru';
			}
		}

		return view('ifelse.result')->with('message',$message);

	}
}