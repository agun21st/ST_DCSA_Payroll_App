@extends('backend.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Employee</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                <li class="breadcrumb-item active">Create Employee</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="{{route('admin.add-employee')}}" method="post" id="create-employee-form" enctype="multipart/form-data">
                @if (Session::get('fail'))
                    <!-- Danger Alert -->
                    <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow shadow fade show" role="alert">
                        <i class="ri-error-warning-line label-icon"></i><strong>Error</strong> - {{ Session::get('fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss=" alert" aria-label="Close"></button>
                    </div>
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Employee Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="employee-name-input">Employee Name*</label>
                                            <input onclick="this.select();" type="text" name="name" class="form-control" id="employee-name-input" placeholder="Enter employee name" value="{{ old('name') }}" required>
                                            <small class="text-danger">@error('name')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="employee-id-input">Employee ID*</label>
                                            <input onclick="this.select();" type="text" name="employee_code" class="form-control" id="employee-id-input" placeholder="Enter employee id" value="ID-{{rand(10000, 99999)}}" required>
                                            <small class="text-danger">@error('employee_code')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="choices-school-input" class="form-label">School Name*</label>
                                            <select class="form-select" name="school" id="choices-school-input" data-choices data-choices-search-false required>
                                                <option value="IST" selected>IST</option>
                                                <option value="DU">DU</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="designation-input" class="form-label">Designation / Position*</label>
                                            <select class="form-select" name="designation" id="designation-input" data-choices data-choices-search-false required>
                                                <option value="Assistant Professor" selected>Assistant Professor</option>
                                                <option value="Dean">Dean</option>
                                                <option value="Teacher">Teacher</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Base Radios -->
                                        <p class="mb-1"><strong>Employee Type*</strong></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="job_type" id="flexRadioDefault1" checked value="Full time">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Full time
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="job_type" id="flexRadioDefault2" value="Part time">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Part time
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="joing-date-input" class="form-label">Joining Date*</label>
                                            <input type="text" name="joining_date" id="joing-date-input" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="{{date('d M, Y')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="date-of-birth-input" class="form-label">Date of birth*</label>
                                            <input type="text" name="dob" id="date-of-birth-input" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Date of birth" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="phone-number-input">Phone Number</label>
                                            <input onclick="this.select();" type="text" name="phone" class="form-control" id="phone-number-input" placeholder="(+88) Employee phone number" value="{{ old('phone') }}">
                                            <small class="text-danger">@error('phone')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="email-input">Email*</label>
                                            <input onclick="this.select();" type="email" name="email" class="form-control" id="email-input" placeholder="example@gmail.com" value="{{ old('email') }}" required>
                                            <small class="text-danger">@error('email')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="address-input" class="form-label">Mailing Address*</label>
                                            <textarea id="address-input" name="address" class="form-control" placeholder="Employee's mailing address" rows="1">{{ old('address') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="educational-qualification-input" class="form-label">Educational Qualification*</label>
                                            <select class="form-select" name="qualification" id="educational-qualification-input" data-choices data-choices-search-false required>
                                                <option value="MSc" selected>MSc</option>
                                                <option value="BSc">BSc</option>
                                                <option value="HSC">HSC</option>
                                                <option value="SSC">SSC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="job-description-input" class="form-label">Job Description</label>
                                            <textarea id="job-description-input" name="job_description" class="form-control" placeholder="Employee's job description" rows="1">{{ old('job_description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="job-experience-input">Job Experience</label>
                                            <input onclick="this.select();" type="text" name="job_experience" class="form-control" id="job-experience-input" placeholder="Employee Job Experience" value="{{ old('job_experience') }}">
                                            <small class="text-danger">@error('job_experience')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="publications-input" class="form-label">Publications</label>
                                            <textarea id="publications-input" name="publications" class="form-control" placeholder="Employee's publications" rows="1">{{ old('publications') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="outstanding_quality-input">Outstanding Quality</label>
                                            <input onclick="this.select();" type="text" name="outstanding_quality" class="form-control" id="outstanding_quality-input" placeholder="Employee outstanding quality" value="{{ old('outstanding_quality') }}">
                                            <small class="text-danger">@error('outstanding_quality')
                                                {{ $message }}
                                                @enderror</small>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-md-6">
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
                                            <input onclick="this.select();" type="number" name="basic_salary" class="form-control" id="basic-salary-input" placeholder="Empoyee Basic Salary" value="15000"  oninput="myAutoFill()" required>
                                            <small class="text-danger">@error('basic_salary')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="increment-number-input">Increment number*</label>
                                            <input onclick="this.select();" type="number" name="increment" class="form-control" id="increment-number-input" placeholder="Increment number" value="1" required>
                                            <small class="text-danger">@error('increment')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="working-hour-input">Working hour*</label>
                                            <input onclick="this.select();" type="number" name="working_hour" class="form-control" id="working-hour-input" placeholder="Working hour" value="8" required>
                                            <small class="text-danger">@error('working_hour')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="over-time-rate-input">Hourly rate*</label>
                                            <input onclick="this.select();" type="number" name="overtime_rate" class="form-control" id="over-time-rate-input" placeholder="Over time rate" value="150" required>
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
                                            <input onclick="this.select();" type="number" name="house_rent" class="form-control" id="house-rent-input" placeholder="House Rent" value="7500" oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('house_rent')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="medical-input">Medical Allowance</label>
                                            <input onclick="this.select();" type="number" name="medical" class="form-control" id="medical-input" placeholder="Medical" value="1250" oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('medical')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="conveyance-input">Conveyance</label>
                                            <input onclick="this.select();" type="number" name="conveyance" class="form-control" id="conveyance-input" placeholder="Conveyance" value="1250" oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('conveyance')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="special_bonus-input">Special Bonus</label>
                                            <input onclick="this.select();" type="number" name="special_bonus" class="form-control" id="special_bonus-input" placeholder="Special bonus" value="1000" oninput="myAutoFill()"  required>
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
                                            <input onclick="this.select();" type="number" name="provident_fund" class="form-control" id="provident-fund-input" placeholder="Provident Fund" value="1500" oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('provident_fund')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="gas-input">Gas Bill</label>
                                            <input onclick="this.select();" type="number" name="gas" class="form-control" id="gas-input" placeholder="Gas Bill" value="500" oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('gas')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="electricity-input">Electricity Bill</label>
                                            <input onclick="this.select();" type="number" name="electricity" class="form-control" id="electricity-input" placeholder="Electricity Bill" value="1000" oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('electricity')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="water-input">Water Bill</label>
                                            <input onclick="this.select();" type="number" name="water" class="form-control" id="water-input" placeholder="Water Bill" value="450" oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('water')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="insurance-input">Insurance</label>
                                            <input onclick="this.select();" type="number" name="insurance" class="form-control" id="insurance-input" placeholder="Insurance" value="1250"  oninput="myAutoFill()"  required>
                                            <small class="text-danger">@error('insurance')
                                                {{ $message }}
                                                @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="welfare-input">Welfare</label>
                                            <input onclick="this.select();" type="number" name="welfare" class="form-control" id="welfare-input" placeholder="Welfare" value="200" oninput="myAutoFill()"  required>
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
                            <button type="submit" class="btn btn-primary bg-gradient waves-effect waves-light w-sm d-flex justify-content-center align-items-center" id="create-employee-button"><div class="" id="create-employee-button-spinner" style="margin-right: 5px;"></div>Submit</button>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->
            </form>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
@section('upHead')
<title>Create Employee | Bangladesh Open University</title>
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