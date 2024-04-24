<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\PersonalDetail;
use App\Models\RecentProject;
use App\Models\TechnicalSkill;
use App\Models\TechStack;

class HomeController extends Controller
{

    public function index()
    {
        $experiences = Experience::all();
        $techskills = TechnicalSkill::all();
        $techstacks = TechStack::all();
        $recentProjects = RecentProject::all();
        $personalDetails = PersonalDetail::first();


        return view('home', compact('experiences', 'techskills', 'techstacks', 'recentProjects', 'personalDetails'));


    }
}
