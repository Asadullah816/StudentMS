<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $teacher = Teacher::all();
        return view('teachers.table', compact('teacher'));
    }


    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.profile', compact('teacher'));
    }


    public function store(Request $request)
    {
        $teacher = new Teacher;
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required|digits_between:10,12',
        ]);
        $teacher->name = $request->name;
        $teacher->address = $request->address;
        $teacher->mobile = $request->mobile;
        $teacher->save();
        return redirect('teachers/table');
    }


    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit', compact('teacher'));
    }



    public function update(Request $request,  $id)
    {
        $teacher = Teacher::find($id);
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required|digits_between:10,12',
        ]);
        $teacher->name = $request->name;
        $teacher->address = $request->address;
        $teacher->mobile = $request->mobile;
        $teacher->save();
        return redirect('teachers/table');
    }



    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return back();
    }
}
