<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function store()
    {

        $attributes =  request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // $attributes['owner_id'] = auth()->id();
        auth()->user()->projects()->create($attributes);


        // Project::create($attributes);
        return redirect('/projects');
        // return view('welcome');
    }

    public function show(Project $project)
    {

        return view('projects.show', compact('project'));
    }
}
