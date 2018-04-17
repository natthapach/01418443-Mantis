<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function index(){
    	$issues = \App\Issue::all();
    	return view("issues.issues")->with("issues", $issues);
    }
    public function show($id){
    	$issue = \App\Issue::findOrFail($id);
    	return view("issues.issue")->with("issue", $issue);
    }
}
