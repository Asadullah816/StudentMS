<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $students = Student::all()->count();
        $courses = Course::all()->count();
        $batches = Batch::all()->count();
        $enrollments = Enrollment::all()->count();
        $total_payment = Payment::sum('ammount');
        $payment = Payment::all()->count();
        return view('welcome', compact('students', 'courses', 'batches', 'enrollments', 'total_payment', 'payment'));
    }
}
