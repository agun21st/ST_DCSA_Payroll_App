<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use App\Models\Admin\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getEmployee = Employee::with('salary')->latest()->paginate(20);
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
            'employee_code' => ['required'],
            'joining_date' => ['required'],
            'dob' => ['required'],
        ]);

        DB::transaction(function () {

            $createEmployee = Employee::create(request()->except(['employee_image']));

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
                $createEmployee->update([
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
        // dd($id);
        $getEmployee = Employee::where('employee_code',$id)->first();
        return view("backend.pages.update-employee",compact("getEmployee"));
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
    public function update(Request $request)
    {
        // dd($request->all());

        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required','unique:employees,email,'.request()->id],
            'employee_code' => ['required'],
            'joining_date' => ['required'],
            'dob' => ['required'],
        ]);
        $getEmployee = Employee::find(request()->id);
        $input = $request->except(['employee_image']);
        $updateEmployee = $getEmployee->update($input);
        if (request()->hasFile('employee_image')) {
            if ($getEmployee->employee_image != '' || $getEmployee->employee_image != null) {
                $imageLocation = str_replace(url('') . "/", "", $getEmployee->employee_image);
                if (File::exists($imageLocation)) {
                    File::delete($imageLocation);
                }
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
                $getEmployee->update([
                    'employee_image' => $image_fullPath,
                ]);
                // $image = Image::make($basic_fullPath)->fit(300, 300);
                // $image->save();
            } else {
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
                $getEmployee->update([
                    'employee_image' => $image_fullPath,
                ]);
                // $image = Image::make($basic_fullPath)->fit(300, 300);
                // $image->save();
            }
        }
        return redirect()->route('admin.employee-list')->with('success', 'Employee updated successfully done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getEmployee = Employee::where("employee_code",request()->id)->first();
        if($getEmployee){
            $getEmployee->delete();
            return redirect()->route('admin.employee-list')->with('success', 'Employee deleted successfully done');
        }
    }

    public function dashboard()
    {
        $totalEmployee = Employee::all()->count();
        return view('backend.pages.dashboard', compact('totalEmployee'));
    }

    public function reports()
    {
        $getEmployee = Employee::with('salary')->latest()->paginate(20);
        return view('backend.pages.reports', compact('getEmployee'));
    }

    public function reportsBySchool(Request $request)
    {
        // dd($request->all())
        $getEmployees = Employee::with('salary')->where('school',$request->school)->get();
        return $getEmployees;
    }
    public function reportsByDepartment(Request $request)
    {
        // dd($request->all())
        $getEmployees = Employee::with('salary')->where('department',$request->department)->get();
        return $getEmployees;
    }
    public function searchById(Request $request)
    {
        // dd($request->all())
        $getEmployee = Employee::with('salary')->where('employee_code','LIKE','%'.$request->employee_code.'%')->first();
        return $getEmployee;
    }
    public function lessBasic(Request $request)
    {
        // dd($request->all())
        $getEmployees = Salary::with('employee')->where('basic', '<=', $request->basic)->get();
        // $getEmployees = Employee::with('salary')->where('basic','=<',$request->lessBasic)->get();
        return $getEmployees;
    }
    public function moreBasic(Request $request)
    {
        // dd($request->all())
        $getEmployees = Salary::with('employee')->where('basic', '>=', $request->basic)->get();
        // $getEmployees = Employee::with('salary')->where('basic','=<',$request->lessBasic)->get();
        return $getEmployees;
    }
}
