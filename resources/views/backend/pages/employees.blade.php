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
                        </div><!--end card-header-->
                        <div class="card-header border-0 d-print-none">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-primary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addEmployee"><i
                                                class="ri-add-line align-bottom me-1"></i> Add Employee</button>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control" placeholder="Search by Employee ID..." id="searchById">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <th scope="col">Education</th>
                                            {{-- <th scope="col">Dob</th> --}}
                                            <th scope="col">Mobile</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Joining_Date</th>
                                            <th scope="col" class="text-center" style="width: 15%">Actions</th>
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
                                            <td>{{$employee->salary[0]['basic']?? ""}}</td>
                                            <td>{{$employee->school}}</td>
                                            <td>{{$employee->designation}}</td>
                                            <td>{{$employee->department}}</td>
                                            <td>{{$employee->qualification}}</td>
                                            {{-- <td>{{$employee->dob}}</td> --}}
                                            <td>{{$employee->mobile}}</td>
                                            <td>{{$employee->email}}</td>
                                            <td>{{$employee->joining_date}}</td>
                                            <td class="text-center">
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
                                            </td>
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
            <!-- end row -->
            
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!-- removeItemModal -->
    <!-- Add Employee -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
        Static Backdrop Modal
    </button> --}}
    <!-- addEmployee Modal -->
    <div class="modal fade" id="addEmployee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="addEmployeeLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalgridLabel">Create Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.add-employee')}}" method="post" id="create-employee-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="employee-name-input">Employee Name*</label>
                                    <input onclick="this.select();" type="text" name="name" class="form-control" id="employee-name-input" placeholder="Enter employee name" value="{{ old('name') }}" required>
                                    <small class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="employee-id-input">Employee ID*</label>
                                    <input onclick="this.select();" type="text" name="employee_code" class="form-control" id="employee-id-input" placeholder="Enter employee id" value="BOU_{{rand(10000, 99999)}}" required>
                                    <small class="text-danger">@error('employee_code')
                                        {{ $message }}
                                    @enderror</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="choices-school-input" class="form-label">School Name*</label>
                                    <select class="form-control" name="school" id="choices-school-input" data-choices data-choices-sorting-false required>
                                        <option value="IST" selected>IST</option>
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
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="choices-department-input" class="form-label">Department*</label>
                                    <select class="form-control" name="department" id="choices-department-input" data-choices data-choices-sorting-false required>
                                        <option value="Diploma in Computer Science & Application">Diploma in Computer Science & Application</option>
                                        <option value="Computer Science & Engineering" selected>Computer Science & Engineering</option>
                                        <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
                                        <option value="Business Administration">Business Administration</option>
                                        <option value="BBA">BBA</option>
                                        <option value="Administration">Administration</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="designation-input" class="form-label">Designation*</label>
                                    <select class="form-control" name="designation" id="designation-input" data-choices data-choices-sorting-false required>
                                        <option value="Professor">Professor</option>
                                        <option value="Associate Professor" selected>Associate Professor</option>
                                        <option value="Lecturer">Senior Lecturer</option>
                                        <option value="Lecturer">Lecturer</option>
                                        <option value="Faculty Member">Faculty Member</option>
                                        <option value="Office Staff">Office Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="educational-qualification-input" class="form-label">Educational Qualification*</label>
                                    <select class="form-control" name="qualification" id="educational-qualification-input" data-choices data-choices-sorting-false required>
                                        <option value="MPhil">MPhil</option>
                                        <option value="MSc in CSE" selected>MSc in CSE</option>
                                        <option value="BSc in CSE">BSc in CSE</option>
                                        <option value="MBA">MBA</option>
                                        <option value="BBA">BBA</option>
                                        <option value="DCSA">DCSA</option>
                                        <option value="HSC">HSC</option>
                                        <option value="SSC">SSC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="joing-date-input" class="form-label">Joining Date*</label>
                                    <input type="text" name="joining_date" id="joing-date-input" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="{{date('d M, Y')}}" required>
                                    <small class="text-danger">
                                        @error('joining_date')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Base Radios -->
                                <p class="mb-1"><strong>Gender*</strong></p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" checked value="Male">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
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
                                    <label class="form-label" for="mobile-number-input">Mobile Number</label>
                                    <input onclick="this.select();" type="text" name="mobile" class="form-control" id="mobile-number-input" placeholder="(+88) Employee mobile number" value="{{ old('mobile') }}">
                                    <small class="text-danger">@error('mobile')
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
                                    <label for="date-of-birth-input" class="form-label">Date of birth*</label>
                                    <input type="text" name="dob" id="date-of-birth-input" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Date of birth" required>
                                </div>
                                <small class="text-danger">
                                    @error('dob')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="address-input" class="form-label">Mailing Address</label>
                                    <textarea id="address-input" name="address" class="form-control" placeholder="Employee's mailing address" rows="1">{{ old('address') }}</textarea>
                                </div>
                                <small class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="photo-input" class="form-label">Employee Image</label>
                                    <input class="form-control" name="employee_image" id="photo-input" type="file" accept="image/png, image/gif, image/jpeg">
                                    <small class="text-danger">@error('employee_image')
                                        {{ $message }}
                                    @enderror</small>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <input type="hidden" name="entry_by" value="{{Auth::user()->id}}" required>
                                    <button type="submit" class="btn btn-primary w-sm d-flex justify-content-center align-items-center" id="create-employee-button"><div class="" id="create-employee-button-spinner" style="margin-right: 5px;"></div>Submit</button>
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
<title>Employee List | Bangladesh Open University</title>
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
    var searchById = document.getElementById("searchById");
    searchById.addEventListener("keydown", function (e) {
        if (e.code === "Enter") {  //checks whether the pressed key is "Enter"
            moreThanBasic(e);
        }
    });

    function moreThanBasic(e) {
        var employee_code = e.target.value;
        if(employee_code==="")return;
        $.ajax({
            url: '/admin/employee-search-by-id',
            dataType: "json",
            type: "Post",
            async: true,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {employee_code: employee_code},
            success: function (data) {
                console.log("searchById")
                console.log(data)
                console.log("searchById")
                let tableData = "";
                // console.log(index, item)
                tableData += `
                <tr>
                    <td><a href="/admin/show-employee/${data.employee_code}" class="fw-semibold" data-bs-toggle="tooltip" data-bs-placement="top" title="Show details">${data.employee_code}</a></td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="flex-shrink-0">
                                <img src="${data.employee_image}" alt="" class="avatar-xs rounded-circle" />
                            </div>
                            <div class="flex-grow-1">
                                ${data.name}
                            </div>
                        </div>
                    </td>
                    <td>${data.salary[0]['basic']}</td>
                    <td>${data.school}</td>
                    <td>${data.designation}</td>
                    <td>${data.department}</td>
                    <td>${data.qualification}</td>
                    <td>${data.mobile}</td>
                    <td>${data.email}</td>
                    <td>${data.joining_date}</td>
                    <td class="text-center">
                        <a href="/admin/show-employee/${data.employee_code}" class="fs-4" data-bs-toggle="tooltip" data-bs-placement="top" title="View / Edit Employee">
                            <i class="mdi mdi-square-edit-outline"></i>
                        </a>
                    </td>
                </tr>
                `
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