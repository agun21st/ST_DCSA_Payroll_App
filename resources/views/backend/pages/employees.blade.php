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

            <div class="row">
                <div class="col-12">
                    <div>
                        <!-- Success Alert -->
                        @if (Session::get('success'))
                            <!-- Danger Alert -->
                            <div class="alert alert-success alert-dismissible alert-solid alert-label-icon shadow fade show" role="alert">
                                <i class="ri-check-double-line label-icon"></i> {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="{{route('admin.create-employee')}}" class="btn btn-success"><i
                                                    class="ri-add-line align-bottom me-1"></i> Add Employee</a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" placeholder="Search Employee...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="card-header">
                            </div> --}}
                            <!-- end card header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck">
                                                        <label class="form-check-label" for="responsivetableCheck"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Employee</th>
                                                <th scope="col">School</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Job_Type</th>
                                                <th scope="col">Basic</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getEmployee as $employee)    
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="responsivetableCheck01">
                                                        <label class="form-check-label" for="responsivetableCheck01"></label>
                                                    </div>
                                                </th>
                                                <td><a href="{{route("admin.show-employee",$employee->employee_id)}}" class="fw-semibold">{{$employee->employee_id}}</a></td>
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
                                                <td>{{$employee->school}}</td>
                                                <td>{{$employee->designation}}</td>
                                                <td class="text-success"><i class="ri-checkbox-circle-line fs-17 align-middle"></i> {{$employee->job_type}}</td>
                                                <td>{{$employee->basic_salary}}</td>
                                                <td>
                                                    <a href="{{route("admin.show-employee",$employee->employee_id)}}">
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="table-light">
                                            <tr>
                                                <td colspan="7"></td>
                                                <td>
                                                    {!! $getEmployee->links() !!}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end table responsive -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Product ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-product">Yes, Delete It!</button>
                    </div>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
@section('upHead')
<title>Employee List | Bangladesh Open University</title>
@endsection
@section('scripts')
    
@endsection