<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    function create()
    {
        return view("dashboard.pages.teachers.index");
    }

    function store(Request $request)
    {
        $teacher = new User();

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);

        $teacher->save();
    }

    function index()
    {
        $teachers = User::where("role", "teacher")->get();
        return view("dashboard.pages.teachers.index", compact("teachers"));
    }

    function update(Request $request, $id)
    {
        //I want to stote a new user with role admin,
        //but I dont know how to do it
        $teacher = User::find($id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        if (isset($request->password)) {
            $teacher->password = Hash::make($request->password);
        }

        $teacher->save();

        return redirect('teachers');
    }
}
