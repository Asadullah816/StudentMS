<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentConroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('home');
Route::prefix('students')->group(function () {
    Route::view('form', 'students.studentForm')->name('studentform');
    Route::post('form', [StudentController::class, 'store'])->name('studentForm');
    Route::get('applications', [StudentController::class, 'index'])->name('studentApplications');
    Route::get('profile/{id}', [StudentController::class, 'show'])->name('studentprofile');
    Route::get('edit/{id}', [StudentController::class, 'edit'])->name('editform');
    Route::post('edit/{id}', [StudentController::class, 'update'])->name('edit');
    Route::get('delete/{id}', [StudentController::class, 'destroy'])->name('studentDelete');
});
Route::prefix('teachers')->group(function () {
    Route::view('form', 'teachers.form')->name('teacherform');
    Route::post('form', [TeacherController::class, 'store'])->name('teacherForm');
    Route::get('table', [TeacherController::class, 'index'])->name('teacherTable');
    Route::get('profile/{id}', [TeacherController::class, 'show'])->name('teacherProfile');
    Route::get('edit/{id}', [TeacherController::class, 'edit'])->name('teacheredit');
    Route::post('edit/{id}', [TeacherController::class, 'update'])->name('teacherEdit');
    Route::get('delete/{id}', [TeacherController::class, 'destroy'])->name('teacherDelete');
});
Route::prefix('courses')->group(function () {
    Route::view('form', 'courses.form')->name('courseform');
    Route::post('form', [CoursesController::class, 'store'])->name('courseForm');
    Route::get('table', [CoursesController::class, 'index'])->name('courseTable');
    Route::get('profile/{id}', [CoursesController::class, 'show'])->name('courseProfile');
    Route::get('edit/{id}', [CoursesController::class, 'edit'])->name('courseedit');
    Route::post('edit/{id}', [CoursesController::class, 'update'])->name('courseEdit');
    Route::get('delete/{id}', [CoursesController::class, 'destroy'])->name('courseDelete');
});
Route::prefix('batches')->group(function () {
    Route::get('form', [BatchController::class, 'formShow'])->name('batchform');
    Route::post('form', [BatchController::class, 'store'])->name('batchForm');
    Route::get('table', [BatchController::class, 'index'])->name('batchTable');
    Route::get('profile/{id}', [BatchController::class, 'show'])->name('batchProfile');
    Route::get('edit/{id}', [BatchController::class, 'edit'])->name('batchedit');
    Route::post('edit/{id}', [BatchController::class, 'update'])->name('batchEdit');
    Route::get('delete/{id}', [BatchController::class, 'destroy'])->name('batchDelete');
});
Route::prefix('enrollments')->group(function () {
    Route::get('form', [EnrollmentController::class, 'formShow'])->name('enrollform');
    Route::post('form', [EnrollmentController::class, 'store'])->name('enrollForm');
    Route::get('table', [EnrollmentController::class, 'index'])->name('enrollTable');
    Route::get('profile/{id}', [EnrollmentController::class, 'show'])->name('enrollProfile');
    Route::get('edit/{id}', [EnrollmentController::class, 'edit'])->name('enrolledit');
    Route::post('edit/{id}', [EnrollmentController::class, 'update'])->name('enrollEdit');
    Route::get('delete/{id}', [EnrollmentController::class, 'destroy'])->name('enrollDelete');
});
Route::prefix('payments')->group(function () {
    Route::get('form', [PaymentConroller::class, 'formShow'])->name('paymentform');
    Route::post('form', [PaymentConroller::class, 'store'])->name('paymentForm');
    Route::get('table', [PaymentConroller::class, 'index'])->name('paymentTable');
    Route::get('profile/{id}', [PaymentConroller::class, 'show'])->name('paymentProfile');
    Route::get('edit/{id}', [PaymentConroller::class, 'edit'])->name('paymentedit');
    Route::post('edit/{id}', [PaymentConroller::class, 'update'])->name('paymentEdit');
    Route::get('delete/{id}', [PaymentConroller::class, 'destroy'])->name('paymentDelete');
    Route::get('download', [PaymentConroller::class, 'generatePdf'])->name('download');
});
