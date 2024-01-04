<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batch = Batch::all();
        return view('batches.table', compact('batch'));
    }
    public function formShow()
    {
        $course = Course::all();
        return view('batches.form', compact('course'));
    }
    public function store(Request $req)
    {
        $batch = new Batch;
        $req->validate([
            'name' => 'required',
            'start_date' => 'required',
            'course_id' => 'required'
        ]);
        $batch->name = $req->name;
        $batch->start_date = $req->start_date;
        $batch->course_id = $req->course_id;
        $batch->save();
        return redirect('batches/table');
    }
    public function edit($id)
    {
        $batch = Batch::find($id);
        $course = Course::all();
        return view('batches.edit', compact('batch', 'course'));
    }
    public function update(Request $req)
    {
        $batch = Batch::find($req->id);
        $req->validate([
            'name' => 'required',
            'start_date' => 'required',
            'course_id' => 'required'
        ]);
        $batch->name = $req->name;
        $batch->start_date = $req->start_date;
        $batch->course_id = $req->course_id;
        $batch->save();
        return redirect('batches/table');
    }
    public function destroy($id)
    {
        $batch = Batch::find($id);
        $batch->delete();
        return back();
    }
}
