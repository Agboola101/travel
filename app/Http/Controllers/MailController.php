<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TripRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReturnRequest;

class MailController extends Controller
{
    public function trip(Request $request)
    {
    	$request->validate([
    		'departure' => 'required',
    		'arrival' => 'required',
    		'date' => 'required',
    		'class' => 'required',
            'email' => 'required',
    	]);
    	$trip =  [
    		'departure' => $request->departure,
    		'arrival' => $request->arrival,
    		'date' => $request->date,
    		'class' => $request->class,
            'email' => $request->email,
    	];
    	Mail::to('sogungbure@gmail.com')->send(new TripRequest($trip));
		return response()->json(['msg' => 'Request succesfull. You will be contacted shortly'], 200);
	}
	
	public function return(Request $request)
    {
    	$request->validate([
    		'departure' => 'required',
    		'arrival' => 'required',
    		'depart_date' => 'required',
    		'return_date' => 'required',
    		'class' => 'required',
            'email' => 'required',
    	]);
    	$trip =  [
    		'departure' => $request->departure,
			'arrival' => $request->arrival,
			'depart_date' => $request->depart_date,
    		'return_date' => $request->return_date,
    		'class' => $request->class,
            'email' => $request->email,
    	];
    	Mail::to('sogungbure@gmail.com')->send(new ReturnRequest($trip));
		return response()->json(['msg' => 'Request succesfull. You will be contacted shortly'], 200);
    }
}
