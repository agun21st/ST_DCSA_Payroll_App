@extends('backend.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Salary</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                <li class="breadcrumb-item active">Edit Salary</li>
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

            <form action="{{route('admin.update-salary')}}" method="post" id="update-salary-form" enctype="multipart/form-data">
                <div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            {{-- <div class="text-danger my-5">{{ $error }}</div> --}}
                            <!-- Danger Alert -->
                            <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow shadow fade show" role="alert">
                                <i class="ri-error-warning-line label-icon"></i><strong>Error</strong> - {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss=" alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                </div>
                @if (Session::get('fail'))
                    <!-- Danger Alert -->
                    <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow shadow fade show" role="alert">
                        <i class="ri-error-warning-line label-icon"></i><strong>Error</strong> - {{ Session::get('fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss=" alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (Session::get('success'))
                        <!-- Danger Alert -->
                        <div class="alert alert-success alert-dismissible alert-solid alert-label-icon shadow fade show" role="alert">
                            <i class="ri-check-double-line label-icon"></i> {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Employee Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="d-flex gap-2 align-items-center">
                                                        @if (isset($getSalary->employee->employee_image))
                                                            <div class="flex-shrink-0">
                                                                <img src="{{$getSalary->employee->employee_image}}" alt="" class="avatar-xs rounded-circle" />
                                                            </div>
                                                            @endif
                                                            <div class="flex-grow-1">
                                                                {{$getSalary->employee->name}}
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    ID: {{$getSalary->employee->employee_code}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Salary Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                {{-- {{$getSalary}} --}}
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-salary-input">Basic Salary* (৳)</label>
                                                    <input onclick="this.select();" type="number" name="basic" class="form-control" id="basic-salary-input" placeholder="Empoyee Basic Salary" value="{{$getSalary->basic}}" oninput="myAutoFill()" required>
                                                    <small class="text-danger">@error('basic')
                                                        {{ $message }}
                                                        @enderror</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="house-rent-input">House Rent (10%)</label>
                                                    <input onclick="this.select();" type="number" name="house_rent" class="form-control" id="house-rent-input" placeholder="House Rent" value=""  oninput="myAutoFill()"  required readonly>
                                                    <small class="text-danger">@error('house_rent')
                                                        {{ $message }}
                                                        @enderror</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="medical-input">Medical Allowance (3%)</label>
                                                    <input onclick="this.select();" type="number" name="medical" class="form-control" id="medical-input" placeholder="Medical" value=""  oninput="myAutoFill()" required readonly>
                                                    <small class="text-danger">@error('medical')
                                                        {{ $message }}
                                                        @enderror</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="mobile-input">Mobile (2%)</label>
                                                    <input onclick="this.select();" type="number" name="mobile" class="form-control" id="mobile-input" placeholder="mobile" value=""  oninput="myAutoFill()" required readonly>
                                                    <small class="text-danger">@error('mobile')
                                                        {{ $message }}
                                                        @enderror</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Deductions</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="provident-fund-input">Provident Fund (5%)</label>
                                                    <input onclick="this.select();" type="number" name="provident_fund" class="form-control" id="provident-fund-input" placeholder="Provident Fund" value=""  oninput="myAutoFill()"  required>
                                                    <small class="text-danger">@error('provident_fund')
                                                        {{ $message }}
                                                        @enderror</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="welfare-input">Welfare (2%)</label>
                                                    <input onclick="this.select();" type="number" name="welfare" class="form-control" id="welfare-input" placeholder="Welfare" value=""  oninput="myAutoFill()"  required>
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
                                    <input type="hidden" name="employee_code" value="{{$getSalary->employee_code}}" required>
                                    <input type="hidden" name="id" value="{{$getSalary->id}}" required>
                                    <button type="submit" class="btn btn-primary bg-gradient waves-effect waves-light w-sm d-flex justify-content-center align-items-center" id="update-salary-button"><div class="" id="update-salary-button-spinner" style="margin-right: 5px;"></div>Update</button>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
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
            $(document).on("submit", "#update-salary-form", function() {
                $("#update-salary-button").attr("disabled", true);
                $("#update-salary-button-spinner").addClass("btn-spinner");
            });
            // $(document).on("click", "#gross_salary-input", function() {
            //     let gross_salary = 0;
            //     let net_salary = 0;
            //     let basic   = document.getElementById("basic-salary-input").value;
            //     let house   = document.getElementById("house-rent-input").value;
            //     let medical = document.getElementById("medical-input").value;
            //     let conveyance = document.getElementById("conveyance-input").value;
            //     let spacial = document.getElementById("special_bonus-input").value;
            //     gross_salary = parseInt(basic)+parseInt(house)+parseInt(medical)+parseInt(conveyance)+parseInt(spacial);
            //     document.getElementById("gross_salary-input").value = parseInt(gross_salary);

            //     let provident = document.getElementById("provident-fund-input").value;
            //     let gas = document.getElementById("gas-input").value;
            //     let electricity = document.getElementById("electricity-input").value;
            //     let water = document.getElementById("water-input").value;
            //     let insurance = document.getElementById("insurance-input").value;
            //     let welfare = document.getElementById("welfare-input").value;
            //     net_salary = parseInt(provident)+parseInt(gas)+parseInt(electricity)+parseInt(water)+parseInt(insurance)+parseInt(welfare);
            //     document.getElementById("net_salary-input").value = parseInt(gross_salary)-parseInt(net_salary);
            // });
            // $(document).on("click", "#net_salary-input", function() {
            //     let gross_salary = 0;
            //     let net_salary = 0;
            //     let basic   = document.getElementById("basic-salary-input").value;
            //     let house   = document.getElementById("house-rent-input").value;
            //     let medical = document.getElementById("medical-input").value;
            //     let conveyance = document.getElementById("conveyance-input").value;
            //     let spacial = document.getElementById("special_bonus-input").value;
            //     gross_salary = parseInt(basic)+parseInt(house)+parseInt(medical)+parseInt(conveyance)+parseInt(spacial);
            //     document.getElementById("gross_salary-input").value = parseInt(gross_salary);

            //     let provident = document.getElementById("provident-fund-input").value;
            //     let gas = document.getElementById("gas-input").value;
            //     let electricity = document.getElementById("electricity-input").value;
            //     let water = document.getElementById("water-input").value;
            //     let insurance = document.getElementById("insurance-input").value;
            //     let welfare = document.getElementById("welfare-input").value;
            //     net_salary = parseInt(provident)+parseInt(gas)+parseInt(electricity)+parseInt(water)+parseInt(insurance)+parseInt(welfare);
            //     document.getElementById("net_salary-input").value = parseInt(gross_salary)-parseInt(net_salary);
            // });
        });
        function myAutoFill(){
            let basicSalary = parseInt(document.getElementById("basic-salary-input").value)
            console.log(basicSalary)
            let house_rent_amount = (basicSalary * 10)/100
            let medical_amount = (basicSalary * 3)/100
            let mobile_amount = (basicSalary * 2)/100
            let provident_amount = (basicSalary * 5)/100
            let welfare_amount = (basicSalary * 2)/100
            console.log(house_rent_amount)
            document.getElementById("house-rent-input").value = house_rent_amount;
            document.getElementById("medical-input").value = medical_amount;
            document.getElementById("mobile-input").value = mobile_amount;
            gross_salary = parseInt(basicSalary)+parseInt(house_rent_amount)+parseInt(medical_amount)+parseInt(mobile_amount);
            document.getElementById("gross_salary-input").value = parseInt(gross_salary);

            document.getElementById("provident-fund-input").value = provident_amount;
            document.getElementById("welfare-input").value = welfare_amount;
            deduction = parseInt(provident_amount)+parseInt(welfare_amount);
            document.getElementById("net_salary-input").value = parseInt(gross_salary)-parseInt(deduction);

            // let gross_salary = 0;
            // let net_salary = 0;
            // let basic   = document.getElementById("basic-salary-input").value;
            // let conveyance = document.getElementById("conveyance-input").value;
            // let spacial = document.getElementById("special_bonus-input").value;

            // let gas = document.getElementById("gas-input").value;
            // let electricity = document.getElementById("electricity-input").value;
            // let water = document.getElementById("water-input").value;
            // let insurance = document.getElementById("insurance-input").value;
        }
        myAutoFill();
    </script>
@endsection