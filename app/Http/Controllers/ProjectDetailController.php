<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetail;
use App\Models\RecentProject;

class ProjectDetailController extends Controller
{


    public function index()
    {
        $projects = RecentProject::orderByDesc('date_develop')->simplePaginate(6);
        $personalDetails = PersonalDetail::first();


        return view('project', compact('projects', 'personalDetails'));

    }


    public function view($id)
    {
        $project = RecentProject::where('id', $id)->first();
        $personalDetails = PersonalDetail::first();
        return view('project-details', compact('personalDetails', 'project'));
 
    }


}
