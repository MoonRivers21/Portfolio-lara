<?php

namespace App\Http\Controllers;

use App\Models\RecentProject;

class ProjectDetailController extends Controller
{


    public function index()
    {
        $projects = RecentProject::orderByDesc('date_develop')->get();
        return view('project', compact('projects'));

    }


    public function view($id)
    {
        $project = RecentProject::find($id)->first();
//        return view('project');


    }


}
