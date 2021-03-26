<?php

namespace App\Http\Controllers;

use App\genre;
use App\movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(Request $request) {
        $genres = genre::all();
        return view('home', ['genres' => $genres]);
    }
    public function genre(Request $request) {
        $movies = movie::all();
        $genres = genre::where('name', 'like', $request->name)->get();
        return view('home', ['genres' => $genres]);    
    }
}
