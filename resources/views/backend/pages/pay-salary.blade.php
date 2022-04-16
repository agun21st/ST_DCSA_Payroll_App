@extends('backend.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Salary List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                <li class="breadcrumb-item active">Salary List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <div class="mb-3">
                        <a href="{{route('admin.employee-list')}}" class="btn btn-primary bg-gradient waves-effect waves-light"><i
                                class="mdi mdi-keyboard-backspace align-bottom me-1"></i> All Employee</a>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-secondary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addSalary"><i
                                class="mdi mdi-plus align-bottom me-1"></i> Generate Salary</button>
                    </div>
                </div>
            </div>

            <form action="{{route('admin.add-salary')}}" method="post" id="add-salary-form" enctype="multipart/form-data">
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
                                                        @if (isset($getEmployee->employee_image))
                                                            <div class="flex-shrink-0">
                                                                <img src="{{$getEmployee->employee_image}}" alt="" class="avatar-xs rounded-circle" />
                                                            </div>
                                                            @endif
                                                            <div class="flex-grow-1">
                                                                {{$getEmployee->name}}
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    ID: {{$getEmployee->employee_code}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="basic-salary-input">Basic Salary*  (৳)</label>
                                                    <input onclick="this.select();" type="number" name="basic" class="form-control" id="basic-salary-input" placeholder="Empoyee Basic Salary" value="{{$getEmployee->salary[0]->basic}}" oninput="myAutoFill()" readonly required>
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
                                                    <input onclick="this.select();" type="number" name="medical" class="form-control" id="medical-input" placeholder="Medical" value="={{old('medical')}}"  oninput="myAutoFill()" required readonly>
                                                    <small class="text-danger">@error('medical')
                                                        {{ $message }}
                                                        @enderror</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="mobile-input">Mobile (2%)</label>
                                                    <input onclick="this.select();" type="number" name="mobile" class="form-control" id="mobile-input" placeholder="mobile" value="{{old('mobile')}}"  oninput="myAutoFill()" required readonly>
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
                                                    <div class="mb-4">
                                                        School: {{$getEmployee->school}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    Desination: {{$getEmployee->designation}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="provident-fund-input">Provident Fund (5%)</label>
                                                    <input onclick="this.select();" type="number" name="provident_fund" class="form-control" id="provident-fund-input" placeholder="Provident Fund" value="{{$getEmployee->provident_fund}}"  oninput="myAutoFill()" readonly required>
                                                    <small class="text-danger">@error('provident_fund')
                                                        {{ $message }}
                                                        @enderror</small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="welfare-input">Welfare (2%)</label>
                                                    <input onclick="this.select();" type="number" name="welfare" class="form-control" id="welfare-input" placeholder="Welfare" value="{{$getEmployee->welfare}}"  oninput="myAutoFill()"  required readonly>
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
                                {{-- <div class="mb-3">
                                    <input type="hidden" name="entry_by" value="{{Auth::user()->id}}" required>
                                    <input type="hidden" name="employee_code" value="{{$getEmployee->employee_code}}" required>
                                    <input type="hidden" name="id" value="{{$getEmployee->id}}" required>
                                    <button type="submit" class="btn btn-primary bg-gradient waves-effect waves-light w-sm d-flex justify-content-center align-items-center" id="add-salary-button"><div class="" id="add-salary-button-spinner" style="margin-right: 5px;"></div>Submit</button>
                                </div> --}}
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                        <!-- end card header -->
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0 table-sm table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Payment_Date</th>
                                                <th scope="col">Payment_Month</th>
                                                <th scope="col">Payment_Year</th>
                                                <th scope="col">Payment_Status</th>
                                                <th scope="col">Created_at</th>
                                                <th scope="col" class="text-center" style="width: 15%">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getSalaryList as $salaryList)
                                                <td>{{$salaryList->id}}</td>
                                                <td>{{$salaryList->payment_date}}</td>
                                                <td>{{$salaryList->payment_month}}</td>
                                                <td>{{$salaryList->payment_year}}</td>
                                                <td>{{$salaryList->status}}</td>
                                                <td>{{$salaryList->created_at}}</td>
                                                <td class="text-center">
                                                    <a href="{{route("admin.pay-slip",$salaryList->id)}}" class="fs-4" data-bs-toggle="tooltip" data-bs-placement="top" title="View Pay Slip">
                                                        <i class="mdi mdi-file-document-outline"></i>
                                                    </a>
                                                    {{-- <button type="button" class="btn btn-ghost-danger waves-effect waves-light shadow-none fs-5 p-0 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Employee" onclick="deleteConfirm('{{$employee->employee_code}}')"><i class="mdi mdi-delete"></i></button>
                                                    <form id="delete-employee-form" action="{{ route('admin.delete-employee', $employee->employee_code) }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form> --}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="table-light">
                                            <tr>
                                                <td colspan="6"></td>
                                                <td>
                                                    {!! $getSalaryList->links() !!}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end table responsive -->
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <!-- end row -->
            </form>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!-- addSalary Modal -->
    <div class="modal fade" id="addSalary" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addSalaryLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalgridLabel">Create Payment Slip</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.add-pay-salary')}}" method="post" id="pay-salary-form">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="payment-date-input" class="form-label">Payment Date*</label>
                                    <input type="text" name="payment_date" id="payment-date-input" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="{{date('d M, Y')}}" required>
                                    <small class="text-danger">
                                        @error('payment_date')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="payment-month-input" class="form-label">Pay for the month*</label>
                                    <select class="form-control" id="payment-month-input" name="payment_month" data-choices data-choices-sorting-false required>
                                        <option value="Jan" selected>January</option>
                                        <option value="Feb">February</option>
                                        <option value="Mar">March</option>
                                        <option value="Apr">April</option>
                                        <option value="May">May</option>
                                        <option value="Jun">June</option>
                                        <option value="Jul">July</option>
                                        <option value="Aug">August</option>
                                        <option value="Sep">September</option>
                                        <option value="Oct">October</option>
                                        <option value="Nov">November</option>
                                        <option value="Dec">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="payment-year-input" class="form-label">Payment Year*</label>
                                    <input type="text" name="payment_year" id="payment-year-input" class="form-control" data-provider="flatpickr" data-date-format="Y" data-deafult-date="{{date('Y')}}" required>
                                    <small class="text-danger">
                                        @error('payment_year')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="status-input" class="form-label">Status*</label>
                                    <select class="form-control" name="status" id="status-input" data-choices data-choices-sorting-false required>
                                        <option value="unpaid" selected>Unpaid</option>
                                        <option value="Paid">Paid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <input type="hidden" name="serial_no" value="SL{{rand(10000000, 99999000)}}" required>
                                    <input type="hidden" name="employee_id" value="{{$getEmployee->id}}" required>
                                    <input type="hidden" name="employee_code" value="{{$getEmployee->employee_code}}" required>
                                    <input type="hidden" name="salary_id" value="{{$getEmployee->salary[0]->id}}" required>
                                    <button type="submit" class="btn btn-primary w-sm d-flex justify-content-center align-items-center" id="pay-salary-button"><div class="" id="pay-salary-button-spinner" style="margin-right: 5px;"></div>Submit</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
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
            $(document).on("submit", "#pay-salary-form", function() {
                $("#pay-salary-button").attr("disabled", true);
                $("#pay-salary-button-spinner").addClass("btn-spinner");
            });
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
        }
        myAutoFill();
    </script>
@endsection