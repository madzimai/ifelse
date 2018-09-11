<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GutuController extends Controller
{
   
	public function index()
	{
		return view('gutu.index');
 //
	}
	public function show(Request $request)
	{
		$amount = $request->input('amount');
		$comment = '';
		 switch ($amount)
		 {
            case $amount  < 5 :
               $comment = " You must be from Gutu";
               break;
            
            case $amount >= 5 && $amount <= 10:
               $comment = " Ko ye transport?";
               break;
            
           case $amount >= 10 && $amount<= 20:
               $comment =  "Ko ye food?";
               break;
            
            case $amount >= 20 && $amount  <= 30 :
               $comment = "Ko mhiripiri?";
               break;
            
            case $amount >= 30 && $amount  <= 50:
               $comment =  "Ko mbudzi?";
               break;
            
            case $amount >= 50 && $amount  <= 80 :
               $comment = "Ko mombe?";
               break;
            
            case $amount >= 80 && $amount  <= 100 :
               $comment =  "Zviri nani";
               break;
            case $amount >= 80 && $amount <= 100 :
               $comment =  "Zviri nani";
               break;
               
        }    
		return view('gutu.result')->with('comment',$comment);
	}
}