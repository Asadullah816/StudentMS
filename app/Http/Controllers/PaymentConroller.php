<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;
use PDF;

class PaymentConroller extends Controller
{
    public function index()
    {
        $payment  = Payment::all();
        return view('payments.table', compact('payment'));
    }
    public function formShow()
    {
        $enrollment = Enrollment::all();
        return view('payments.form', compact('enrollment'));
    }
    public function store(Request $req)
    {
        $payment = new Payment;
        $req->validate([
            'enrollment_id' => 'required',
            'ammount' => 'required',
        ]);
        $payment->enrollment_id = $req->enrollment_id;
        $payment->ammount = $req->ammount;
        $payment->paid_date = now();
        $payment->save();
        return redirect('payments/table');
    }
    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return back();
    }
    public function edit($id)
    {
        $enrollment = Enrollment::all();
        $payment = Payment::find($id);
        return view('payments.edit', compact('payment', 'enrollment'));
    }
    public function update(Request $req)
    {
        $payment = Payment::find($req->id);
        $req->validate([
            'enrollment_id' => 'required',
            'ammount' => 'required',
        ]);
        $payment->enrollment_id = $req->enrollment_id;
        $payment->ammount = $req->ammount;
        $payment->paid_date = now();
        $payment->save();
        return redirect('payments/table');
    }
    public function generatePdf()
    {
        set_time_limit(120);
        $payment = Payment::all();
        $pdf = PDF::loadView('payments.download',  ['payment' => $payment]);
        return $pdf->download('payment.pdf');
    }
}
