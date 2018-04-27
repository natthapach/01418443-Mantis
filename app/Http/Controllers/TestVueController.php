<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestVueController extends Controller
{
    public function index(){
        $projects = \App\Project::all();
        $users = \App\User::all();
        $categories = [
            [
                "name" => "Category A",
                "menu" => [
                    "A1", "A2", "A3"
                ]
            ],
            [
                "name" => "Category B",
                "menu" => [
                    "B1", "B2", "B3"
                ]
            ],
            [
                "name" => "Category C",
                "menu" => [
                    "C1", "C2", "C3"
                ]
            ]
        ];
        return view("test-vue", compact('projects', 'users', 'categories'));
    }
}
