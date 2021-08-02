<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function customLogin(UserRequest $request)
    {
        $userLogin = $request->only('email','password');
        if (Auth::attempt($userLogin)){

        }
    }



    public function welcome()
    {
        return view('welcome');
    }
}
