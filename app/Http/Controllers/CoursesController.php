<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return view('courses.table', compact('course'));
    }


    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.profile', compact('course'));
    }


    public function store(Request $request)
    {
        $course = new Course;
        $request->validate([
            'name' => 'required',
            'syllabus' => 'required',
            'duration' => 'required',
        ]);
        $course->name = $request->name;
        $course->syllabus = $request->syllabus;
        $course->duration = $request->duration;
        $course->save();
        return redirect('courses/table');
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('course'));
    }



    public function update(Request $request,  $id)
    {
        $course = Course::find($id);
        $request->validate([
            'name' => 'required',
            'syllabus' => 'required',
            'duration' => 'required',
        ]);
        $course->name = $request->name;
        $course->syllabus = $request->syllabus;
        $course->duration = $request->duration;
        $course->save();
        return redirect('courses/table');
    }



    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return back();
    }
}
