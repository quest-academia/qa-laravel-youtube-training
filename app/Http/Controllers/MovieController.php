<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('user:id,name')->paginate(12);
        return view('movie.index',compact('movies'));
    }
}
