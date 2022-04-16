@extends('backend.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Employee</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                <li class="breadcrumb-item active">Edit Employee</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <a href="{{route('admin.employee-list')}}" class="btn btn-primary bg-gradient waves-effect waves-light"><i
                                class="mdi mdi-keyboard-backspace align-bottom me-1"></i> All Employee</a>
                    </div>
                </div>
            </div>

            <form action="{{route('admin.update-employee')}}" method="post" id="create-employee-form" enctype="multipart/form-data">
                @if (Session::get('fail'))
                    <!-- Danger Alert -->
                    <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow shadow fade show" role="alert">
                        <i class="ri-error-warning-line label-icon"></i><strong>Error</strong> - {{ Session::get('fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss=" alert" aria-label="Close"></button>
                    </div>
                @endif
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Employee Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="employee-name-input">Employee Name*</label>
                                            <input onclick="this.select();" type="text" name="name" class="form-control" id="employee-name-input" placeholder="Enter employee name" value="{{ $getEmployee->name }}" required>
                                            <small class="text-danger">@error('name')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="employee-id-input">Employee ID*</label>
                                            <input onclick="this.select();" type="text" name="employee_code" class="form-control" id="employee-id-input" placeholder="Enter employee id" value="{{$getEmployee->employee_code}}" required>
                                            <small class="text-danger">@error('employee_code')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="choices-school-input" class="form-label">School Name*</label>
                                            <select class="form-control" name="school" id="choices-school-input" data-choices data-choices-sorting-false required>
                                                <option value="IST" {{$getEmployee->school==="IST"?"selected":""}}>IST</option>
                                                <option value="DU" {{$getEmployee->school==="DU"?"selected":""}}>DU</option>
                                                <option value="DUET" {{$getEmployee->school==="DUET"?"selected":""}}>DUET</option>
                                                <option value="MAIT" {{$getEmployee->school==="MAIT"?"selected":""}}>MAIT</option>
                                                <option value="RU" {{$getEmployee->school==="RU"?"selected":""}}>RU</option>
                                                <option value="IIUC" {{$getEmployee->school==="IIUC"?"selected":""}}>IIUC</option>
                                                <option value="CUET" {{$getEmployee->school==="CUET"?"selected":""}}>CUET</option>
                                                <option value="KUET" {{$getEmployee->school==="KUET"?"selected":""}}>KUET</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="choices-department-input" class="form-label">Department*</label>
                                            <select class="form-control" name="department" id="choices-department-input" data-choices data-choices-sorting-false required>
                                                <option value="Computer Science & Engineering" {{$getEmployee->department==="Computer Science & Engineering"?"selected":""}}>Computer Science & Engineering</option>
                                                <option value="Electronics & Communication Engineering" {{$getEmployee->department==="Electronics & Communication Engineering"?"selected":""}}>Electronics & Communication Engineering</option>
                                                <option value="Business Administration" {{$getEmployee->department==="Business Administration"?"selected":""}}>Business Administration</option>
                                                <option value="Diploma in Computer Science & Application" {{$getEmployee->department==="Diploma in Computer Science & Application"?"selected":""}}>Diploma in Computer Science & Application</option>
                                                <option value="BBA" {{$getEmployee->department==="BBA"?"selected":""}}>BBA</option>
                                                <option value="Administration" {{$getEmployee->department==="Administration"?"selected":""}}>Administration</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="designation-input" class="form-label">Designation*</label>
                                            <select class="form-control" name="designation" id="designation-input" data-choices data-choices-sorting-false required>
                                                <option value="Associate Professor" {{$getEmployee->designation==="Associate Professor"?"selected":""}}>Associate Professor</option>
                                                <option value="Lecturer" {{$getEmployee->designation==="Lecturer"?"selected":""}}>Lecturer</option>
                                                <option value="Faculty Member" {{$getEmployee->designation==="Faculty Member"?"selected":""}}>Faculty Member</option>
                                                <option value="Office Staff" {{$getEmployee->designation==="Office Staff"?"selected":""}}>Office Staff</option>
                                                <option value="Professor" {{$getEmployee->designation==="Professor"?"selected":""}}>Professor</option>
                                                <option value="Senior Lecturer" {{$getEmployee->designation==="Senior Lecturer"?"selected":""}}>Senior Lecturer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="date-of-birth-input" class="form-label">Date of birth*</label>
                                            <input type="text" name="dob" id="date-of-birth-input" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Date of birth" data-deafult-date="{{$getEmployee->dob}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="joing-date-input" class="form-label">Joining Date*</label>
                                            <input type="text" name="joining_date" id="joing-date-input" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="{{$getEmployee->joining_date}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Base Radios -->
                                        <p class="mb-1"><strong>Gender*</strong></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" {{$getEmployee->gender==="Male"?"checked":""}} value="Male">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" {{$getEmployee->gender==="Female"?"checked":""}} value="Female">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>
                                        <small class="text-danger">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="mobile-number-input">Mobile</label>
                                            <input onclick="this.select();" type="text" name="mobile" class="form-control" id="mobile-number-input" placeholder="(+88) Employee Mobile" value="{{ $getEmployee->mobile }}">
                                            <small class="text-danger">@error('mobile')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="email-input">Email*</label>
                                            <input onclick="this.select();" type="email" name="email" class="form-control" id="email-input" placeholder="example@gmail.com" value="{{ $getEmployee->email }}" required>
                                            <small class="text-danger">@error('email')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="address-input" class="form-label">Mailing Address*</label>
                                            <textarea id="address-input" name="address" class="form-control" placeholder="Employee's mailing address" rows="1">{{ $getEmployee->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="educational-qualification-input" class="form-label">Educational Qualification*</label>
                                            <select class="form-control" name="qualification" id="educational-qualification-input" data-choices data-choices-sorting-false required>
                                                <option value="MSc in CSE" {{$getEmployee->qualification==="MSc in CSE"?"selected":""}}>MSc in CSE</option>
                                                <option value="BSc in CSE" {{$getEmployee->qualification==="BSc in CSE"?"selected":""}}>BSc in CSE</option>
                                                <option value="BBA" {{$getEmployee->qualification==="BBA"?"selected":""}}>BBA</option>
                                                <option value="MBA" {{$getEmployee->qualification==="MBA"?"selected":""}}>MBA</option>
                                                <option value="MPhil" {{$getEmployee->qualification==="MPhil"?"selected":""}}>MPhil</option>
                                                <option value="HSC" {{$getEmployee->qualification==="HSC"?"selected":""}}>HSC</option>
                                                <option value="SSC" {{$getEmployee->qualification==="SSC"?"selected":""}}>SSC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="photo-input" class="form-label">Employee Image</label>
                                            <input class="form-control" name="employee_image" id="photo-input" type="file" accept="image/png, image/gif, image/jpeg">
                                            <small class="text-danger">@error('employee_image')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                    </div>
                                    @if (isset($getEmployee->employee_image))
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="photo-input" class="form-label">Employee Image</label>
                                                <img src="{{$getEmployee->employee_image}}" id="photo-input" alt="image" height="100" />
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="mb-3 d-grid">
                                    <input type="hidden" name="entry_by" value="{{Auth::user()->id}}" required>
                                    <input type="hidden" name="id" value="{{$getEmployee->id}}" required>
                                    <button type="submit" class="btn btn-primary bg-gradient waves-effect waves-light w-sm d-flex justify-content-center align-items-center" id="create-employee-button"><div class="" id="create-employee-button-spinner" style="margin-right: 5px;"></div>Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    {{-- <div class="col-md-6">
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Salary Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-salary-input">Basic Salary* (৳)</label>
                                            <input onclick="this.select();" type="number" name="basic_salary" class="form-control" id="basic-salary-input" placeholder="Empoyee Basic Salary" value="{{$getEmployee->basic_salary}}" oninput="myAutoFill()" required>
                                            <small class="text-danger">@error('basic_salary')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="increment-number-input">Increment number*</label>
                                            <input onclick="this.select();" type="number" name="increment" class="form-control" id="increment-number-input" placeholder="Increment number" value="{{$getEmployee->increment}}" required>
                                            <small class="text-danger">@error('increment')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="working-hour-input">Working hour*</label>
                                            <input onclick="this.select();" type="number" name="working_hour" class="form-control" id="working-hour-input" placeholder="Working hour" value="{{$getEmployee->working_hour}}" required>
                                            <small class="text-danger">@error('working_hour')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="over-time-rate-input">Over time rate*</label>
                                            <input onclick="this.select();" type="number" name="overtime_rate" class="form-control" id="over-time-rate-input" placeholder="Over time rate" value="{{$getEmployee->overtime_rate}}" required>
                                            <small class="text-danger">@error('overtime_rate')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Allowances</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="house-rent-input">House Rent</label>
                                            <input onclick="this.select();" type="number" name="house_rent" class="form-control" id="house-rent-input" placeholder="House Rent" value="{{$getEmployee->house_rent}}"  oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('house_rent')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="medical-input">Medical Allowance</label>
                                            <input onclick="this.select();" type="number" name="medical" class="form-control" id="medical-input" placeholder="Medical" value="{{$getEmployee->medical}}"  oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('medical')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="conveyance-input">Conveyance</label>
                                            <input onclick="this.select();" type="number" name="conveyance" class="form-control" id="conveyance-input" placeholder="Conveyance" value="{{$getEmployee->conveyance}}"  oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('conveyance')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="special_bonus-input">Special Bonus</label>
                                            <input onclick="this.select();" type="number" name="special_bonus" class="form-control" id="special_bonus-input" placeholder="Special bonus" value="{{$getEmployee->special_bonus}}"  oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('special_bonus')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Deductions</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="provident-fund-input">Provident Fund</label>
                                            <input onclick="this.select();" type="number" name="provident_fund" class="form-control" id="provident-fund-input" placeholder="Provident Fund" value="{{$getEmployee->provident_fund}}"  oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('provident_fund')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="gas-input">Gas Bill</label>
                                            <input onclick="this.select();" type="number" name="gas" class="form-control" id="gas-input" placeholder="Gas Bill" value="{{$getEmployee->gas}}"  oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('gas')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="electricity-input">Electricity Bill</label>
                                            <input onclick="this.select();" type="number" name="electricity" class="form-control" id="electricity-input" placeholder="Electricity Bill" value="{{$getEmployee->electricity}}"  oninput="myAutoFill()" required>
                                            <small class="text-danger">@error('electricity')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="water-input">Water Bill</label>
                                            <input onclick="this.select();" type="number" name="water" class="form-control" id="water-input" placeholder="Water Bill" value="{{$getEmployee->water}}" oninput="myAutoFill()" required>
                                            <small class="text-danger">@error('water')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="insurance-input">Insurance</label>
                                            <input onclick="this.select();" type="number" name="insurance" class="form-control" id="insurance-input" placeholder="Insurance" value="{{$getEmployee->insurance}}" oninput="myAutoFill()" required>
                                            <small class="text-danger">@error('insurance')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="welfare-input">Welfare</label>
                                            <input onclick="this.select();" type="number" name="welfare" class="form-control" id="welfare-input" placeholder="Welfare" value="{{$getEmployee->welfare}}"  oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('welfare')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="gross_salary-input">Gross Salary</label>
                                            <input type="number" name="gross_salary" class="form-control" id="gross_salary-input" placeholder="Click here..." readonly required>
                                            <small class="text-danger">@error('gross_salary')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="net_salary-input">Net Salary</label>
                                            <input type="number" name="net_salary" class="form-control" id="net_salary-input" placeholder="Click here..." readonly required>
                                            <small class="text-danger">@error('net_salary')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="entry_by" value="{{Auth::user()->id}}" required>
                            <input type="hidden" name="id" value="{{$getEmployee->id}}" required>
                            <button type="submit" class="btn btn-primary w-sm d-flex justify-content-center align-items-center" id="create-employee-button"><div class="" id="create-employee-button-spinner" style="margin-right: 5px;"></div>Update</button>
                        </div>
                        <!-- end card -->
                    </div> --}}
                </div>
                <!-- end row -->
            </form>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
@section('upHead')
<title>Edit Employee | Bangladesh Open University</title>
<!-- Plugins css -->
<link href="/assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
@endsection
@section('scripts')
    <script>
        // Admin Login Form
        $(function(){
            $(document).on("submit", "#create-employee-form", function() {
                $("#create-employee-button").attr("disabled", true);
                $("#create-employee-button-spinner").addClass("btn-spinner");
            });
            $(document).on("click", "#gross_salary-input", function() {
                let gross_salary = 0;
                let net_salary = 0;
                let basic   = document.getElementById("basic-salary-input").value;
                let house   = document.getElementById("house-rent-input").value;
                let medical = document.getElementById("medical-input").value;
                let conveyance = document.getElementById("conveyance-input").value;
                let spacial = document.getElementById("special_bonus-input").value;
                gross_salary = parseInt(basic)+parseInt(house)+parseInt(medical)+parseInt(conveyance)+parseInt(spacial);
                document.getElementById("gross_salary-input").value = parseInt(gross_salary);

                let provident = document.getElementById("provident-fund-input").value;
                let gas = document.getElementById("gas-input").value;
                let electricity = document.getElementById("electricity-input").value;
                let water = document.getElementById("water-input").value;
                let insurance = document.getElementById("insurance-input").value;
                let welfare = document.getElementById("welfare-input").value;
                net_salary = parseInt(provident)+parseInt(gas)+parseInt(electricity)+parseInt(water)+parseInt(insurance)+parseInt(welfare);
                document.getElementById("net_salary-input").value = parseInt(gross_salary)-parseInt(net_salary);
            });
            $(document).on("click", "#net_salary-input", function() {
                let gross_salary = 0;
                let net_salary = 0;
                let basic   = document.getElementById("basic-salary-input").value;
                let house   = document.getElementById("house-rent-input").value;
                let medical = document.getElementById("medical-input").value;
                let conveyance = document.getElementById("conveyance-input").value;
                let spacial = document.getElementById("special_bonus-input").value;
                gross_salary = parseInt(basic)+parseInt(house)+parseInt(medical)+parseInt(conveyance)+parseInt(spacial);
                document.getElementById("gross_salary-input").value = parseInt(gross_salary);

                let provident = document.getElementById("provident-fund-input").value;
                let gas = document.getElementById("gas-input").value;
                let electricity = document.getElementById("electricity-input").value;
                let water = document.getElementById("water-input").value;
                let insurance = document.getElementById("insurance-input").value;
                let welfare = document.getElementById("welfare-input").value;
                net_salary = parseInt(provident)+parseInt(gas)+parseInt(electricity)+parseInt(water)+parseInt(insurance)+parseInt(welfare);
                document.getElementById("net_salary-input").value = parseInt(gross_salary)-parseInt(net_salary);
            });
        });
        function myAutoFill(){
            console.log("I am fired")
            let gross_salary = 0;
            let net_salary = 0;
            let basic   = document.getElementById("basic-salary-input").value;
            let house   = document.getElementById("house-rent-input").value;
            let medical = document.getElementById("medical-input").value;
            let conveyance = document.getElementById("conveyance-input").value;
            let spacial = document.getElementById("special_bonus-input").value;
            gross_salary = parseInt(basic)+parseInt(house)+parseInt(medical)+parseInt(conveyance)+parseInt(spacial);
            document.getElementById("gross_salary-input").value = parseInt(gross_salary);

            let provident = document.getElementById("provident-fund-input").value;
            let gas = document.getElementById("gas-input").value;
            let electricity = document.getElementById("electricity-input").value;
            let water = document.getElementById("water-input").value;
            let insurance = document.getElementById("insurance-input").value;
            let welfare = document.getElementById("welfare-input").value;
            net_salary = parseInt(provident)+parseInt(gas)+parseInt(electricity)+parseInt(water)+parseInt(insurance)+parseInt(welfare);
            document.getElementById("net_salary-input").value = parseInt(gross_salary)-parseInt(net_salary);
        }
        myAutoFill();
    </script>
@endsection