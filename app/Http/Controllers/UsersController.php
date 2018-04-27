<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct(){
        $this->middleware('auth', [
            "except" => ["index", "show"]
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();
        return view("users.index", ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(\Gate::denies('create-user')){
        //     return redirect('/users');
        // }
        // if(\Auth::user()->cant('create', User::class)){
        //     return 'denie';
        // }
        $this->authorize('create', User::class);
        $accessLevels = [
            'viewer', 'reporter', 'developer',
            'manager', 'administrator'
        ];
        return view("users.create", ["accessLevels" => $accessLevels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "username" => "min:6|max:20|unique:users,username",
            "name" => "min:6",
            "email" => "unique:users,email|email",
            "password" => "min:6"
        ]);
        try{
            $user = new User;
            $user->username = $request->input('username');
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->access_level = $request->input('access_level');
            $user->is_enabled = 0;
            $user->save();
            return redirect('/users/' . $user->id);
        }catch(Exception $e){
            return back()->withInput();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(\Auth::user()->cant('update', $user))
            return 'denie';
        // if(\Gate::denies('update-user', $user)){
        //     return redirect('/users');
        // }
        $accessLevels = [
            'viewer', 'reporter', 'developer',
            'manager', 'administrator'
        ];
        return view("users.edit", [
            "accessLevels" => $accessLevels,
            "user" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            "username" => "min:6|max:20|unique:users,username,$user->id",
            "name" => "min:6",
            "email" => "unique:users,email|email",
            "password" => "min:6"
        ]);
        try{
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->access_level = $request->input('access_level');
            $user->save();
            return redirect('/users/' . $user->id);
        }catch(Exception $e){
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect("/users");
    }
}
