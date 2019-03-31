<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    //custom login funciton 

    public function login(Request $request)
    {
    	//dd($request->all());

    //authenticate user now
    if(Auth::attempt([

    	'email' => $request->email,
    	'password' => $request->password


    	]))
//put more nested if statemets in here
    {
    	//find ther user  and redirect the user
    	$user = User::where('email',$request->email)->first();
    	if($user->is_admin( ))
    	{
    		return redirect()->route('home');
    	}

    	return redirect()->route('superadmin');
    }

    return redirect()->back();
    }


    //create a is_admin method in user model
}
