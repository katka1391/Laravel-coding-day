<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $searchString = $request->input('search');
        $movies = Movie::where('name', 'like', '%' . $searchString . '%')->get();
        return view('movies.index' , compact('movies'));
    }

    public function top10()
    {
        $movies = Movie::take(10)->orderBy('rating','DESC')->get();
        return view('movies.top10' , compact('movies'));
    }

    public function show($id)
    {
        $movies = Movie::findOrFail($id);

        return view('movies.show' , compact('movies' ));
    }
}
