<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Student;
use PhpParser\Node\Expr\FuncCall;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enroll = Enrollment::all();
        return view('enrollments.table', compact('enroll'));
    }
    public function formShow()
    {
        $student = Student::all();
        $batch = Batch::all();
        return view('enrollments.form', compact('student', 'batch'));
    }
    public function store(Request $req)
    {
        $enroll = new Enrollment;
        $req->validate([
            'enroll_no' => 'required',
            'join_date' => 'required',
            'student_id' => 'required',
            'batch_id' => 'required',
            'fee' => 'required',
        ]);
        $enroll->enroll_no = $req->enroll_no;
        $enroll->join_date = $req->join_date;
        $enroll->student_id = $req->student_id;
        $enroll->batch_id = $req->batch_id;
        $enroll->fee = $req->fee;
        $enroll->save();
        return redirect('enrollments/table');
    }
    public function edit($id)
    {
        $batch = Batch::all();
        $student = Student::all();
        $enroll = Enrollment::find($id);
        return view('enrollments.edit', compact('enroll', 'student', 'batch'));
    }



    public function update(Request $req,  $id)
    {
        $enroll = Enrollment::find($id);
        $req->validate([
            'enroll_no' => 'required',
            'join_date' => 'required',
            'student_id' => 'required',
            'batch_id' => 'required',
            'fee' => 'required',
        ]);
        $enroll->enroll_no = $req->enroll_no;
        $enroll->join_date = $req->join_date;
        $enroll->student_id = $req->student_id;
        $enroll->batch_id = $req->batch_id;
        $enroll->fee = $req->fee;
        $enroll->save();
        return redirect('enrollments/table');
    }



    public function destroy($id)
    {
        $enroll = Enrollment::find($id);
        $enroll->delete();
        return back();
    }
}
