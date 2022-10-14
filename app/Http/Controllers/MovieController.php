<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::with('user')->get();
        return view('movie.index',compact('movies'));
    }
}
