<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function students()
    {
        $students = User::where("role", "student")->get();

        return view('dashboard.pages.students.index', compact('students'));
    }

    function users()
    {
        $users = User::where("role", "!=", "student")->get();
        return view('dashboard.pages.users.index', compact('users'));
    }

    function create()
    {
        return view('dashboard.pages.users.create');
    }

    function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.pages.users.edit', compact('user'));
    }
    function store(Request $request)
    {
        //I want to stote a new user with role admin,
        //but I dont know how to do it
        $user = new User();
        $user->role = "admin";
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('users');
    }

    function update(Request $request, $id)
    {
        //I want to stote a new user with role admin,
        //but I dont know how to do it
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('users');
    }

    function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('users');
    }
}
