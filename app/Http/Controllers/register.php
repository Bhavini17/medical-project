<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/*self included*/

use App\register;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;


class register extends Controller
{
     public function getRegister(Request $request)
    {


    	$this->validate($request , array(

            'name' => 'required',
            'email' => 'required',
    		'password' => 'required',
    		'conf_pass' => 'required'

    	));


    	$user = new register;
    	$user->name = Input::get("name");
    	$user->email = Input::get("email");
    	$user->password = Input::get("password");
    	$user->conf_pass =  Input::get("conf_pass");
    	$user->save();

         return('saved');     

    }
}
