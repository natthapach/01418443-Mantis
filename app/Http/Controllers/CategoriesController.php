<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
    	$categories = \App\Category::all();
    	return view("categories.categories")->with("categories", $categories);
    }
    public function show($id){
    	$category = \App\Category::findOrFail($id);
    	return view("categories.category")->with("category", $category);
    } 
}
