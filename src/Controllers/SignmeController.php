<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class SignmeController extends Controller
{
    ## Function Name    : signin
    ## Perpous          : to build sign in page html
    public function signin(){
    	return view('home.signin');
    }

    ## Function Name    : postSignin
    ## Perpous          : to sign in action 
    public function postSignin(Request $request){
    	dd($request->all());
    }
    
    ## Function Name    : signup
    ## Perpous          : to build sign up html
    public function signup(){
    	return view('home.signup');
    }
    
    ## Function Name    : postSignup
    ## Perpous          : to create sign up process
    public function postSignup(Request $request){
    	dd($request->all());	
    }
    
    ## Function Name    : forgotPassword
    ## Perpous          : to build forget password html
    public function forgotPassword(){
        return view('home.forget-password');
    }
    
    ## Function Name    : postforgotPassword
    ## Perpous          : to create forget password process 
    public function postforgotPassword(Request $request){
        dd($request->all());    
    }
    
    ## Function Name    : changePassword
    ## Perpous          : to build change password html
    public function changePassword(){
        return view('home.change-password');
    }
    
    ## Function Name    : postChangePassword
    ## Perpous          : to create change password process
    public function postChangePassword(Request $request){
        dd($request->all());    
    }
}
