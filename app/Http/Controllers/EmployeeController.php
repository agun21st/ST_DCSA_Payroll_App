<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getEmployee = Employee::latest()->paginate(5);
        return view('backend.pages.employees', compact('getEmployee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create-employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());

        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required','unique:employees,email'],
            'basic_salary' => ['required'],
            'gross_salary' => ['required'],
            'net_salary' => ['required'],
        ]);

        DB::transaction(function () {
            $createOffer = Employee::create(request()->all());
            if (request()->hasFile('employee_image')) {
                //* set file store folder
                $storeFolder = "images/employees/" . date("Y-m-d") . "/";
                //* get original file name
                $image_fileName = request()->file('employee_image')->getClientOriginalName();
                $image_fileExtension = request()->file('employee_image')->getClientOriginalExtension();
                //* remove file extension
                $image_fileName = strtok($image_fileName, ".");
                //* remove blank spaces
                $imageFinalName = str_replace(' ', '', $image_fileName);
                $image_UniqueName = $imageFinalName . "_" . time() . "." . $image_fileExtension;
                //? Full path with file name
                $image_fullPath = url('') . "/" . $storeFolder . $image_UniqueName;
                $basic_fullPath = $storeFolder . $image_UniqueName;
                //! Save file to server folder
                request()->file('employee_image')->move($storeFolder, $image_UniqueName);
                $createOffer->update([
                    'employee_image' => $image_fullPath,
                ]);
                // $image = Image::make($basic_fullPath)->fit(300, 300);
                // $image->save();
            }
        },3);

        return redirect()->route('admin.employee-list')->with('success', 'Employee created successfully done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
