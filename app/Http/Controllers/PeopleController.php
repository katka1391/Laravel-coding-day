<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::take(500)->orderBy('fullname')->get();
    //  $searchString = $request->input('search');
    //  $people = People::where('fullname', 'like', '%' . $searchString . '%')->get();
        return view('people.index' , compact('people'));
    }


    public function show($id)
    {
        $people= People::findOrFail($id);

        return view('people.show' , compact('people'));
    }

 
}
