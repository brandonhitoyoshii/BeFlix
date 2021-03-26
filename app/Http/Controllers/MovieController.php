<?php

namespace App\Http\Controllers;

use App\episode;
use App\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request) {
        $movies = movie::where('title', 'like', $request->title)->first();
        $episodes = episode::where('movie_id', $movies->id)->paginate(3);
        return view('detail', ['movies' => $movies, 'episodes' => $episodes]);    
    }
}
