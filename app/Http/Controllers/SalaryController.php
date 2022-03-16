<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use App\Models\Admin\Employee;

class SalaryController extends Controller
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
        $credentials = $request->validate([
            'basic' => ['required'],
            'house_rent' => ['required'],
            'medical' => ['required'],
            'mobile' => ['required'],
            'provident_fund' => ['required'],
            'welfare' => ['required'],
            'gross_salary' => ['required'],
            'net_salary' => ['required'],
            'entry_by' => ['required'],
            'employee_code' => ['required'],
            'id' => ['required'],
        ]);

        $storeSalary = Salary::create([
            'basic' => $request->basic,
            'house_rent' => $request->house_rent,
            'medical' => $request->medical,
            'mobile' => $request->mobile,
            'gross_salary' => $request->gross_salary,
            'provident_fund' => $request->provident_fund,
            'welfare' => $request->welfare,
            'net_salary' => $request->net_salary,
            'entry_by' => $request->entry_by,
            'employee_code' => $request->employee_code,
            'employee_id' => $request->id,
        ]);

        return redirect()->route('admin.employee-list')->with('success', 'Employee salary added successfully done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $getEmployee = Employee::where('employee_code',$id)->first();
        return view("backend.pages.create-salary",compact("getEmployee"));
    }
    public function editSalary($id)
    {
        // dd($id);
        $getSalary = Salary::with('employee')->where('employee_code',$id)->first();
        return view("backend.pages.update-salary",compact("getSalary"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'basic' => ['required'],
            'house_rent' => ['required'],
            'medical' => ['required'],
            'mobile' => ['required'],
            'provident_fund' => ['required'],
            'welfare' => ['required'],
            'gross_salary' => ['required'],
            'net_salary' => ['required'],
            'entry_by' => ['required'],
            'employee_code' => ['required'],
            'id' => ['required'],
        ]);
        $checkSalary = Salary::where('employee_code', $request->employee_code)->first();
        if($checkSalary){

            $checkSalary->update([
                'basic' => $request->basic,
                'house_rent' => $request->house_rent,
                'medical' => $request->medical,
                'mobile' => $request->mobile,
                'gross_salary' => $request->gross_salary,
                'provident_fund' => $request->provident_fund,
                'welfare' => $request->welfare,
                'net_salary' => $request->net_salary,
                'entry_by' => $request->entry_by,
            ]);

            return redirect()->route('admin.employee-list')->with('success', 'Employee update added successfully done');

        }else{
            return back('admin.edit-salary')->with('fail', 'Employee salary update error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        //
    }
}
