<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class SignmeController extends Controller
{
    public function signin(){
    	return view('signme.signin');
    }

    public function postSignin(Request $request){
    	dd($request->all());
    }

    public function signup(){
    	return view('signme.signup');
    }

    public function postSignup(Request $request){
    	dd($request->all());	
    }

    public function forgotPassword(){
        return view('signme.forget-password');
    }

    public function postforgotPassword(Request $request){
        dd($request->all());    
    }
}
