<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Admin\Employee;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'payment_date' => ['required'],
            'payment_month' => ['required'],
            'payment_year' => ['required'],
            'status' => ['required'],
            'employee_id' => ['required'],
            'salary_id' => ['required'],
            'employee_code' => ['required'],
        ]);

        $storePayment = Payment::create($request->all());

        return redirect()->route('admin.pay-salary',$request->employee_code)->with('success', 'Employee pay salary successfully done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $getEmployee = Employee::with('salary')->where('employee_code',$id)->first();
        $getSalaryList = Payment::where('employee_code',$id)->latest()->paginate(5);
        return view("backend.pages.pay-salary",compact(["getEmployee","getSalaryList"]));
    }
    public function paySlip($id)
    {
        // dd($id);
        // $getEmployee = Employee::with('salary')->where('employee_code',$id)->first();
        $getSalaryInfo = Payment::with(['employee','salary'])->where('id',$id)->first();

        return view("backend.pages.pay-slip",compact(["getSalaryInfo"]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
