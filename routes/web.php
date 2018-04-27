<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
Route::resource("/users", "UsersController");


Route::get('/projects', 'ProjectsController@index')->name("projects");  
Route::get('/projects/create', 'ProjectsController@create');            
Route::get('/projects/{project}/edit', 'ProjectsController@edit');  
Route::post('/projects', 'ProjectsController@store');
Route::put('/projects/{project}', 'ProjectsController@update');
Route::delete('/projects/{project}', 'ProjectsController@destroy');
Route::get('/projects/{project}', 'ProjectsController@show')->where('id','[0-9]+')->name("project");

Route::get('/categories', 'CategoriesController@index')->name("categories");
Route::get('/categories/create', 'CategoriesController@create');            
Route::get('/categories/{category}/edit', 'CategoriesController@edit'); 
Route::get('/categories/{category}', 'CategoriesController@show')->where('id','[0-9]+')->name("category");
Route::post('/categories', 'CategoriesController@store');
Route::put('/categories/{category}', 'CategoriesController@update');
Route::delete('/categories/{category}', 'CategoriesController@destroy');


Route::get('/issues', 'IssuesController@index');
Route::get('/issues/create', 'IssuesController@create');            
Route::get('/issues/{issue}/edit', 'IssuesController@edit'); 
Route::get('/issues/{issue}', 'IssuesController@show')->where('id','[0-9]+');
Route::post('/issues', 'IssuesController@store');
Route::put('/issues/{issue}', 'IssuesController@update');
Route::delete('/issues/{issue}', 'IssuesController@destroy');

Route::get('/photoes/create', 'PhotoesController@create');
Route::post('/photoes', 'PhotoesController@store');

Route::get("/test-vue/{any}", 'TestVueController@index')->where('any', '.*');

Route::get('storage/{filename}', function ($filename)
{
    
    $path = storage_path('app\public\\' . $filename);

    if (!File::exists($path)) {
        abort(404);
        // return "file not exist " . $filename;
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
// Route::get('/users/{id}', function($id){
// 	$user = \App\User::findOrFail($id);
// 	return $user;
// })->where('id','[0-9]+');

// Route::get('/users/{name}', function($name){
// 	return 'String = '.$name;
// })->where('name','[a-zA-Z][a-zA-Z0-9]+');

// Route::get('/categories/{id}', function($id){
// 	$cate = \App\Category::findOrFail($id);
// 	return $cate;
// })->where('id','[0-9]+');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/", "DashboardController@index");