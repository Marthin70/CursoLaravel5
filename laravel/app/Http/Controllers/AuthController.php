<?php namespace Cinema\Http\Controllers;


use Auth;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function Login(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return ":D";
        }
    }
}