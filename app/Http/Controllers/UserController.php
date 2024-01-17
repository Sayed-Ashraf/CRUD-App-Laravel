<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $age = $request->age;
        $gender = $request->gender; 

        $User = new User;
        $User->name = $name;
        $User->age = $age;
        $User->gender = $gender;

        $User->save();

        return to_route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $singleUser = User::find($id);
        return view('users.show', ['user' => $singleUser]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $singleUser = User::find($id);
        return view('users.edit', ['user' => $singleUser]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->name;
        $age = $request->age;
        $gender = $request->gender;

        $singleUser = User::find($id);
        $singleUser->update([
            'name' => $name,
            'age' => $age,
            'gender' => $gender 
        ]);
        return to_route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $singleUser = User::find($id);
        $singleUser->delete();
        return to_route('users.index');
    }
}
