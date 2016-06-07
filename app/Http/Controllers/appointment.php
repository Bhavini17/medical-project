<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\appointment;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;

class appointment extends Controller
{
    public function getAppointment(Request $request)
    {


    	$this->validate($request , array(

            'name' => 'required',
            'email' => 'required',
    		'phoneno' => 'required',
    		'doa' => 'required',
    		'toa' => 'required'

    	));

    	$user = new appointment;
    	$user->name = Input::get("name");
    	$user->email = Input::get("email");
    	$user->phoneno = Input::get("phoneno");
    	$user->doa =  Input::get("doa");
    	$user->toa = Input::get("toa");
    	$user->save();

         return('saved');     

    }
}
