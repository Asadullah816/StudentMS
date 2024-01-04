<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        return view('students.studentTable', compact('student'));
    }
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.profile', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required|digits_between:10,12',
        ]);
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->save();
        return redirect('students/applications');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $student = Student::find($id);
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required|digits_between:10,12',
        ]);
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->save();
        return redirect('students/applications');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teacher = Student::find($id);
        $teacher->delete();
        return back();
    }
}
