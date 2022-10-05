<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return View
     */ 

    public function showLoginForm()
    {
        return view('auth.login');
    }

    // public function login()
    // {

    // }
}
