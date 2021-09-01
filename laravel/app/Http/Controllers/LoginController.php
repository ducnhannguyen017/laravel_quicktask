<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $rememberme = $request->input('rememberme');
        if (Auth::attempt(['username' => $username, 'password' => $password], $rememberme)) {
            return redirect('/project');
        } else {
            return redirect()->back();
        }
    }
}
