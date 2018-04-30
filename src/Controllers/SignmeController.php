<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \App\User;
use \Auth;
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
        $username = $request->username;
        $password = $request->password;
        /* CHANGE INDEXES AS PER YOU REQUIREMENT */
        $attemptData = [
            'username'   => $username,
            'password'   => $password,
        ];
        if (Auth::attempt($attemptData)) {
            echo "Login success";
        } else {
            return \Redirect::back()->with('error_msg','Login faild : credentials mismatched');
        }
    }
    
    ## Function Name    : signup
    ## Perpous          : to build sign up html
    public function signup(){
    	return view('home.signup');
    }
    
    ## Function Name    : postSignup
    ## Perpous          : to create sign up process
    public function postSignup(Request $request){
        /* CHANGE INDEXES AS PER YOU REQUIREMENT */
    	$validator = \Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors());
        } else {
            $new_user = new User;
            $new_user->name = $request->name;
            $new_user->email = $request->email;
            $new_user->username = $request->username;
            $new_user->password = $request->password;
            $new_user->save();
            echo "New user is created successfully";
        }
    }
    
    ## Function Name    : forgotPassword
    ## Perpous          : to build forget password html
    public function forgotPassword(){
        return view('home.forget-password');
    }
    
    ## Function Name    : postforgotPassword
    ## Perpous          : to create forget password process 
    public function postforgotPassword(Request $request){
        $email = $request->email;
        $emailExists = User::where('email',$email)->count();
        if ($emailExists > 0) {
            echo "Email exists, now you can  rest the password";
        } else {
            return \Redirect::back()->with('error_msg','Email is not exists. Please check the email !');
        }
    }
    
    ## Function Name    : changePassword
    ## Perpous          : to build change password html
    public function changePassword(){
        return view('home.change-password');
    }
    
    ## Function Name    : postChangePassword
    ## Perpous          : to create change password process
    public function postChangePassword(Request $request){
        $user = Auth::user();
        $user->password = $request->password;
        $user->save();
        return \Redirect::back()->with('success_msg','Password is updated successfully');
    }
}
