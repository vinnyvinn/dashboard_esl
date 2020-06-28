<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginsController extends Controller
{
    public function signIN()
    {
        Auth::attempt(['email' => 'evans.ngala@esl-eastafrica.com','password'=>'VIPadisa07']);
        return redirect('/dashboard');
    }

    public function authenticates(Request $request)
    {
        if (Auth::attempt(['email' => $request->email,'password'=>$request->password])) {
            setcookie("auth_email", $request->email, time()+3600, "/",env("COOKIE_EXTENSION"), 0);
            return response('success');
        }
    }
}
