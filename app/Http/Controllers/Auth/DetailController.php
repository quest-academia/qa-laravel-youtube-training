<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public const PASSWORD = 'Lt368V7ay9JMTrXw';

    public function showDetailForm($pw)
    {
        if ($pw == self::PASSWORD) {
            return view('auth.detail');
        } else {
            return view('auth.login');
        }
    }
}
