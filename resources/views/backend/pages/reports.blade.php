@extends('backend.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Employee</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                <li class="breadcrumb-item active">All Employee</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- end row -->
            <div class="row d-flex justify-content-center">
                <div class="col-12">
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
                            <div class="row g-4 pt-5 d-print-none">
                                <div class="col-sm-3">
                                    <div class="">
                                        <label for="choices-school-input" class="form-label">Query by School</label>
                                        <select class="form-control" name="school" id="choices-school-input" data-choices data-choices-sorting-false onchange="filterBySchool(this.value)">
                                            <option value="" selected>Select School</option>
                                            <option value="IST">IST</option>
                                            <option value="DU">DU</option>
                                            <option value="DUET">DUET</option>
                                            <option value="MAIT">MAIT</option>
                                            <option value="RU">RU</option>
                                            <option value="IIUC">IIUC</option>
                                            <option value="CUET">CUET</option>
                                            <option value="KUET">KUET</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="">
                                        <label for="choices-department-input" class="form-label">Query by Department</label>
                                        <select class="form-control" name="department" id="choices-department-input" data-choices data-choices-sorting-false onchange="filterByDepartment(this.value)">
                                            <option value="" selected>Select Department</option>
                                            <option value="Diploma in Computer Science & Application">Diploma in Computer Science & Application</option>
                                            <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                                            <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
                                            <option value="Business Administration">Business Administration</option>
                                            <option value="BBA">BBA</option>
                                            <option value="Administration">Administration</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="choices-less-search-input" class="form-label">Query by Less Than Basic</label>
                                    <div class="search-box" id="choices-less-search-input">
                                        <input type="number" class="form-control" placeholder="Basic Less Than..." id="lessBasic">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="choices-greater-search-input" class="form-label">Query by More Than Basic</label>
                                    <div class="search-box" id="choices-greater-search-input">
                                        <input type="number" class="form-control" placeholder="Basic Greater Than..." id="moreBasic">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-header-->
                        <div class="card-body p-4 border-top border-top-dashed">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-sm">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Basic</th>
                                            <th scope="col">School</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Department</th>
                                            {{-- <th scope="col">Dob</th> --}}
                                            {{-- <th scope="col">Mobile</th> --}}
                                            <th scope="col">Education</th>
                                            <th scope="col">Joining_Date</th>
                                            {{-- <th scope="col" class="text-center">Actions</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody id="tableBodySection">
                                        @foreach ($getEmployee as $employee)
                                            <tr>
                                                <td>
                                                    <a href="{{route("admin.show-employee",$employee->employee_code)}}" class="fw-semibold" data-bs-toggle="tooltip" data-bs-placement="top" title="Show details">{{$employee->employee_code}}</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 align-items-center">
                                                        @if (isset($employee->employee_image))
                                                            <div class="flex-shrink-0">
                                                                <img src="{{$employee->employee_image}}" alt="" class="avatar-xs rounded-circle" />
                                                            </div>
                                                            @endif
                                                            <div class="flex-grow-1">
                                                                {{$employee->name}}
                                                            </div>
                                                    </div>
                                                </td>
                                                <td>{{$employee->salary[0]["basic"]?? ""}}</td>
                                                <td>{{$employee->school}}</td>
                                                <td>{{$employee->designation}}</td>
                                                <td>{{$employee->department}}</td>
                                                {{-- <td>{{$employee->dob}}</td> --}}
                                                {{-- <td>{{$employee->mobile}}</td> --}}
                                                <td>{{$employee->qualification}}</td>
                                                <td>{{$employee->joining_date}}</td>
                                                {{-- <td></td> --}}
                                                {{-- <td class="text-center">
                                                    <a href="{{route("admin.show-employee",$employee->employee_code)}}" class="fs-4" data-bs-toggle="tooltip" data-bs-placement="top" title="View / Edit Employee">
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                    </a>
                                                    @if (count($employee->salary))
                                                        <a href="{{route("admin.edit-salary",$employee->employee_code)}}" class="fs-4" data-bs-toggle="tooltip" data-bs-placement="top" title="View / Edit Salary">
                                                            <i class="mdi mdi-account-cash-outline"></i>
                                                        </a>
                                                        <a href="{{route("admin.pay-salary",$employee->employee_code)}}" class="fs-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Pay Salary">
                                                            <i class="mdi mdi-cash-check"></i>
                                                        </a>
                                                    @else
                                                        <a href="{{route("admin.create-salary",$employee->employee_code)}}" class="fs-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Salary">
                                                            <i class="mdi mdi-account-cash-outline"></i>
                                                        </a>
                                                    @endif
                                                    <button type="button" class="btn btn-ghost-danger waves-effect waves-light shadow-none fs-5 p-0 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Employee" onclick="deleteConfirm('{{$employee->employee_code}}')"><i class="mdi mdi-delete"></i></button>
                                                    <form id="delete-employee-form" action="{{ route('admin.delete-employee', $employee->employee_code) }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="table-light d-print-none">
                                        <tr>
                                            <td colspan="10"></td>
                                            <td>
                                                {!! $getEmployee->links() !!}
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- end table -->
                            </div>
                            {{-- <div class="my-5 d-flex justify-content-around d-print-none">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Prepared By:</h6>
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Approved By:</h6>
                            </div> --}}
                            {{-- <div class="mt-4">
                                <div class="alert alert-info">
                                    <p class="mb-0"><span class="fw-semibold">NOTES:</span> All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online.</p>
                                </div>
                            </div> --}}
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
    <!-- removeItemModal -->
    <!-- Add Employee -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
        Static Backdrop Modal
    </button> --}}
@endsection
@section('upHead')
<title>Employee List | Bangladesh Open University</title>
@endsection
@section('downHead')
{{-- <style>
    @media print {
       .noprint {
          display: none;
       }
    }
</style> --}}
@endsection
@section('scripts')
<script>
    // Admin Login Form
    $(function(){
        $(document).on("submit", "#create-employee-form", function() {
            $("#create-employee-button").attr("disabled", true);
            $("#create-employee-button-spinner").addClass("btn-spinner");
        });

    });
    function deleteConfirm(code){
        event.preventDefault();
        var proceed = confirm(`Are you sure you want to delete Employee ID:- ${code}?`);
        if (proceed) {
            document.getElementById('delete-employee-form').submit();
        } else {
        //don't proceed
        }
    }

    function filterBySchool(value)
    {
        if(value==="")return;
        $.ajax({
            url: '/admin/report-by-school',
            dataType: "json",
            type: "Post",
            async: true,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {school: value},
            success: function (data) {
                console.log("School")
                let tableData = "";
                data.forEach((item, index)=>{
                    // console.log(index, item)
                    tableData += `
                    <tr>
                        <td><a href="/admin/show-employee/${item.employee_code}" class="fw-semibold" data-bs-toggle="tooltip" data-bs-placement="top" title="Show details">${item.employee_code}</a></td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="${item.employee_image}" alt="" class="avatar-xs rounded-circle" />
                                </div>
                                <div class="flex-grow-1">
                                    ${item.name}
                                </div>
                            </div>
                        </td>
                        <td>${item.salary[0]['basic']}</td>
                        <td>${item.school}</td>
                        <td>${item.designation}</td>
                        <td>${item.department}</td>
                        <td>${item.qualification}</td>
                        <td>${item.joining_date}</td>
                    </tr>
                    `
                });
                $('#tableBodySection').empty();
                $('#tableBodySection').append(tableData);
            },
            error: function (xhr, exception) {
                var msg = "";
                if (xhr.status === 0) {
                    msg = "Not connect.\n Verify Network." + xhr.responseText;
                } else if (xhr.status == 404) {
                    msg = "Requested page not found. [404]" + xhr.responseText;
                } else if (xhr.status == 500) {
                    msg = "Internal Server Error [500]." +  xhr.responseText;
                } else if (exception === "parsererror") {
                    msg = "Requested JSON parse failed.";
                } else if (exception === "timeout") {
                    msg = "Time out error." + xhr.responseText;
                } else if (exception === "abort") {
                    msg = "Ajax request aborted.";
                } else {
                    msg = "Error:" + xhr.status + " " + xhr.responseText;
                }
            }
        });
    }
    function filterByDepartment(value)
    {
        if(value==="")return;
        $.ajax({
            url: '/admin/report-by-department',
            dataType: "json",
            type: "Post",
            async: true,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {department: value},
            success: function (data) {
                console.log("Department")
                let tableData = "";
                data.forEach((item, index)=>{
                    // console.log(index, item)
                    tableData += `
                    <tr>
                        <td><a href="/admin/show-employee/${item.employee_code}" class="fw-semibold" data-bs-toggle="tooltip" data-bs-placement="top" title="Show details">${item.employee_code}</a></td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="${item.employee_image}" alt="" class="avatar-xs rounded-circle" />
                                </div>
                                <div class="flex-grow-1">
                                    ${item.name}
                                </div>
                            </div>
                        </td>
                        <td>${item.salary[0]['basic']}</td>
                        <td>${item.school}</td>
                        <td>${item.designation}</td>
                        <td>${item.department}</td>
                        <td>${item.qualification}</td>
                        <td>${item.joining_date}</td>
                    </tr>
                    `
                });
                $('#tableBodySection').empty();
                $('#tableBodySection').append(tableData);
            },
            error: function (xhr, exception) {
                var msg = "";
                if (xhr.status === 0) {
                    msg = "Not connect.\n Verify Network." + xhr.responseText;
                } else if (xhr.status == 404) {
                    msg = "Requested page not found. [404]" + xhr.responseText;
                } else if (xhr.status == 500) {
                    msg = "Internal Server Error [500]." +  xhr.responseText;
                } else if (exception === "parsererror") {
                    msg = "Requested JSON parse failed.";
                } else if (exception === "timeout") {
                    msg = "Time out error." + xhr.responseText;
                } else if (exception === "abort") {
                    msg = "Ajax request aborted.";
                } else {
                    msg = "Error:" + xhr.status + " " + xhr.responseText;
                }
            }
        });
    }
    var lessBasic = document.getElementById("lessBasic");
    lessBasic.addEventListener("keydown", function (e) {
        if (e.code === "Enter") {  //checks whether the pressed key is "Enter"
            lessThanBasic(e);
        }
    });

    function lessThanBasic(e) {
        var basic = e.target.value;
        if(basic==="")return;
        $.ajax({
            url: '/admin/report-by-lessBasic',
            dataType: "json",
            type: "Post",
            async: true,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {basic: basic},
            success: function (data) {
                console.log("LessBasic")
                console.log(data)
                console.log("LessBasic")
                let tableData = "";
                data.forEach((item, index)=>{
                    // console.log(index, item)
                    tableData += `
                    <tr>
                        <td><a href="/admin/show-employee/${item.employee.employee_code}" class="fw-semibold" data-bs-toggle="tooltip" data-bs-placement="top" title="Show details">${item.employee.employee_code}</a></td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="${item.employee.employee_image}" alt="" class="avatar-xs rounded-circle" />
                                </div>
                                <div class="flex-grow-1">
                                    ${item.employee.name}
                                </div>
                            </div>
                        </td>
                        <td>${item.basic}</td>
                        <td>${item.employee.school}</td>
                        <td>${item.employee.designation}</td>
                        <td>${item.employee.department}</td>
                        <td>${item.employee.qualification}</td>
                        <td>${item.employee.joining_date}</td>
                    </tr>
                    `
                });
                $('#tableBodySection').empty();
                $('#tableBodySection').append(tableData);
            },
            error: function (xhr, exception) {
                var msg = "";
                if (xhr.status === 0) {
                    msg = "Not connect.\n Verify Network." + xhr.responseText;
                } else if (xhr.status == 404) {
                    msg = "Requested page not found. [404]" + xhr.responseText;
                } else if (xhr.status == 500) {
                    msg = "Internal Server Error [500]." +  xhr.responseText;
                } else if (exception === "parsererror") {
                    msg = "Requested JSON parse failed.";
                } else if (exception === "timeout") {
                    msg = "Time out error." + xhr.responseText;
                } else if (exception === "abort") {
                    msg = "Ajax request aborted.";
                } else {
                    msg = "Error:" + xhr.status + " " + xhr.responseText;
                }
            }
        });
    }
    var moreBasic = document.getElementById("moreBasic");
    moreBasic.addEventListener("keydown", function (e) {
        if (e.code === "Enter") {  //checks whether the pressed key is "Enter"
            moreThanBasic(e);
        }
    });

    function moreThanBasic(e) {
        var basic = e.target.value;
        if(basic==="")return;
        $.ajax({
            url: '/admin/report-by-moreBasic',
            dataType: "json",
            type: "Post",
            async: true,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {basic: basic},
            success: function (data) {
                console.log("moreBasic")
                console.log(data)
                console.log("moreBasic")
                let tableData = "";
                data.forEach((item, index)=>{
                    // console.log(index, item)
                    tableData += `
                    <tr>
                        <td><a href="/admin/show-employee/${item.employee.employee_code}" class="fw-semibold" data-bs-toggle="tooltip" data-bs-placement="top" title="Show details">${item.employee.employee_code}</a></td>
                        <td>
                            <div class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="${item.employee.employee_image}" alt="" class="avatar-xs rounded-circle" />
                                </div>
                                <div class="flex-grow-1">
                                    ${item.employee.name}
                                </div>
                            </div>
                        </td>
                        <td>${item.basic}</td>
                        <td>${item.employee.school}</td>
                        <td>${item.employee.designation}</td>
                        <td>${item.employee.department}</td>
                        <td>${item.employee.qualification}</td>
                        <td>${item.employee.joining_date}</td>
                    </tr>
                    `
                });
                $('#tableBodySection').empty();
                $('#tableBodySection').append(tableData);
            },
            error: function (xhr, exception) {
                var msg = "";
                if (xhr.status === 0) {
                    msg = "Not connect.\n Verify Network." + xhr.responseText;
                } else if (xhr.status == 404) {
                    msg = "Requested page not found. [404]" + xhr.responseText;
                } else if (xhr.status == 500) {
                    msg = "Internal Server Error [500]." +  xhr.responseText;
                } else if (exception === "parsererror") {
                    msg = "Requested JSON parse failed.";
                } else if (exception === "timeout") {
                    msg = "Time out error." + xhr.responseText;
                } else if (exception === "abort") {
                    msg = "Ajax request aborted.";
                } else {
                    msg = "Error:" + xhr.status + " " + xhr.responseText;
                }
            }
        });
    }
</script>
@endsection