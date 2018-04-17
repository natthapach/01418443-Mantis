<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
    	$projects = \App\Project::all();
    	return view("projects.projects")->with("projects", $projects);
    }
    public function show($id){
    	$project = \App\Project::findOrFail($id);
    	return view("projects.project")->with("project", $project);
    }
}
