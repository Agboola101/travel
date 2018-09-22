<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TripRequest;
use Illuminate\Support\Facades\Mail;

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
    	return redirect()->back()->with('msg', 'Request succesfull. You will be contacted shortly');
    }
}
