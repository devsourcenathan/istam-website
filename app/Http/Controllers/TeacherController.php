<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    function create()
    {
        return view("dashboard.pages.teachers.create");
    }

    function edit($id)
    {
        $teacher = User::find($id);

        return view("dashboard.pages.teachers.edit", compact('teacher'));
    }

    function store(Request $request)
    {
        $teacher = new User();

        $teacher->role = "teacher";
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);

        $teacher->save();

        return redirect('teachers');
    }

    function index()
    {
        $teachers = User::where("role", "teacher")->get();
        return view("dashboard.pages.teachers.index", compact("teachers"));
    }

    function update(Request $request, $id)
    {
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
