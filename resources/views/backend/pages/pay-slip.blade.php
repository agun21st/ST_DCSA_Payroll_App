@extends('backend.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Payment Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Payment Slip</a></li>
                                <li class="breadcrumb-item active">Payment Details</li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="col-12 d-print-none d-flex justify-content-between">
                    <div class="mb-3">
                        <a href="{{route('admin.pay-salary',$getSalaryInfo->employee_code)}}" class="btn btn-primary bg-gradient waves-effect waves-light"><i
                                class="mdi mdi-keyboard-backspace align-bottom me-1"></i> Back</a>
                    </div>
                    <div class="mb-3">
                        <a href="{{route('admin.employee-list')}}" class="btn btn-secondary bg-gradient waves-effect waves-light"><i
                                class="mdi mdi-keyboard-backspace align-bottom me-1"></i> All Employee</a>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row d-flex justify-content-center">
                <div class="col-xxl-9">
                    <div class="card" id="demo">
                        <div class="card-header border-bottom-dashed p-4">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <img src="{{asset('/assets/images/bou_logo.webp')}}" class="card-logo card-logo-dark" alt="Pay Slipt" height="70">
                                    <img src="{{asset('/assets/images/bou_logo.webp')}}" class="card-logo card-logo-light" alt="Pay Slipt" height="70">
                                </div>
                                <div class="">
                                    <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                    <p class="text-muted mb-1">Board Bazar, Gazipur-1705, Bangladesh</p>
                                    <p class="text-muted mb-0">Phone: 88-02-9291112, 09666730730 Ex.105</p>
                                </div>
                            </div>
                        </div><!--end card-header-->
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold fs-2">Salary slip for the month of {{$getSalaryInfo->payment_month}}, {{$getSalaryInfo->payment_year}} </p>
                                    {{-- <div>{{$getSalaryInfo}}</div> --}}
                                </div><!--end col-->
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Slip No</p>
                                            <h5 class="fs-14 mb-3">#{{$getSalaryInfo->serial_no}}</h5>
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                            <h5 class="fs-14 mb-0">{{$getSalaryInfo->created_at}}</h5>
                                        </div>
                                        <div class="col-3">
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                                            <span class="badge badge-soft-success fs-11 mb-3">{{$getSalaryInfo->status}}</span>
                                            <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                                            <h5 class="fs-14 mb-0">৳{{$getSalaryInfo->salary->net_salary}}</h5>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-muted text-uppercase fw-semibold mb-3">
                                                Employee Details
                                            </h6>
                                            <p class="fw-medium mb-2">Employee ID: {{$getSalaryInfo->employee_code}}</p>
                                            <p class="text-muted mb-1"><strong>Name:</strong> {{$getSalaryInfo->employee->name}}</p>
                                            <p class="text-muted mb-1"><strong>School:</strong> {{$getSalaryInfo->employee->school}}</p>
                                            <p class="text-muted mb-1"><strong>Designation:</strong> {{$getSalaryInfo->employee->designation}}</p>
                                            <p class="text-muted mb-1"><strong>Department:</strong> {{$getSalaryInfo->employee->department}}</p>
                                            <p class="text-muted mb-0"><strong>Date of Joining:</strong> {{$getSalaryInfo->employee->joining_date}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
                        </div><!--end card-body-->
                        <div class="card-body p-4 border-top border-top-dashed">
                            <div class="table-responsive">
                                <table class="table table-borderless text-center table-nowrap align-middle mb-0 table-sm">
                                    {{-- <thead>
                                        <tr class="table-active">
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col" class="text-end">Amount</th>
                                        </tr>
                                    </thead> --}}
                                    <tbody>
                                        <tr>
                                            <th scope="row text-end">
                                                <span>Basic</span>
                                            </th>
                                            <td class="text-end">
                                                <span class="fw-medium text-end">৳{{$getSalaryInfo->salary->basic}}</span>
                                            </td>
                                            <th scope="row text-end">House_Rent</th>
                                            <td class="text-end">৳{{$getSalaryInfo->salary->house_rent}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row text-end">Medical</th>
                                            <td class="text-end">
                                                <span class="fw-medium text-end">৳{{$getSalaryInfo->salary->medical}}</span>
                                            </td>
                                            <th scope="row text-end">Mobile</th>
                                            <td class="text-end">৳{{$getSalaryInfo->salary->mobile}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row text-end">Provident_Fund</th>
                                            <td class="text-end">
                                                <span class="fw-medium text-end">৳{{$getSalaryInfo->salary->provident_fund}}</span>
                                            </td>
                                            <th scope="row text-end">welfare</th>
                                            <td class="text-end">৳{{$getSalaryInfo->salary->welfare}}</td>
                                        </tr>
                                        <tr class="border-top border-top-dashed mt-2">
                                            <td colspan="3"></td>
                                            <td colspan="2" class="fw-medium p-0">
                                                <table class="table table-borderless text-start table-nowrap align-middle mb-0 table-sm">
                                                    <tbody>
                                                        <tr>
                                                            <td>Gross_Salary</td>
                                                            <td class="text-end">৳{{$getSalaryInfo->salary->gross_salary}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total_Deduction</td>
                                                            <td class="text-end">৳{{$getSalaryInfo->salary->gross_salary-$getSalaryInfo->salary->net_salary}}</td>
                                                        </tr>
                                                        <tr class="border-top border-top-dashed">
                                                            <th scope="row">Net Salary Amount</th>
                                                            <td class="text-end">৳{{$getSalaryInfo->salary->net_salary}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table><!--end table-->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><!--end table-->
                            </div>
                            <div class="my-5 d-flex justify-content-around">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Prepared By:</h6>
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Approved By:</h6>
                            </div>
                            <div class="mt-4">
                                <div class="alert alert-info">
                                    <p class="mb-0"><span class="fw-semibold">NOTES:</span> All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online.</p>
                                </div>
                            </div>
                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                                <a href="javascript:window.print()" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
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
            $(document).on("submit", "#pay-salary-form", function() {
                $("#pay-salary-button").attr("disabled", true);
                $("#pay-salary-button-spinner").addClass("btn-spinner");
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