<?php

namespace App\Http\Controllers;

use App\Models\Experience;

class HomeController extends Controller
{

    public function index()
    {
        $experiences = Experience::all();
        
        return view('home', compact('experiences'));


    }
}
