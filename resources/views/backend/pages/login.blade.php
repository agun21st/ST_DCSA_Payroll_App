<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">
    <head>
        <meta charset="utf-8" />
        <title>Sign In | Bangladesh Open University Payroll System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Md.M.H.Razib DCSA-IST-2019 Mobile:+8801712834621  | Web Developer @ Creative IT Institution">
        <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/flash.css')}}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="auth-page-wrapper pt-5">
            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
                <div class="bg-overlay"></div>

                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50" style="visibility:hidden;">
                                <div>
                                    <a href="{{url('/')}}" class="d-inline-block auth-logo" style="background: rgb(255,255,255,0.7);border-radius: 10px;padding: 10px 20px;">
                                        <img src="/images/propertyNext-logo1.png" alt="" height="35">
                                    </a>
                                </div>
                                <p class="mt-3 fs-15 fw-medium">Properties for Sale and for Rent in Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">

                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <a href="{{url('/')}}" class="d-inline-block auth-logo">
                                            <img src="/assets/images/bou_logo.webp" alt="" height="80">
                                        </a>
                                        <h5 class="text-primary mt-4">Payroll Management System</h5>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="{{route('admin.login')}}" method="post" id="admin-login-form">
                                            @if (Session::get('fail'))
                                                <!-- Danger Alert -->
                                                <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow shadow fade show" role="alert">
                                                    <i class="ri-error-warning-line label-icon"></i><strong>Error</strong> - {{ Session::get('fail') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss=" alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="agun21st@outlook.com" required>
                                                <small class="text-danger">@error('email')
                                                    {{ $message }}
                                                @enderror</small>
                                            </div>

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="javascript:void(0)" class="text-muted">Forgot password?</a>
                                                </div>
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" name="password" class="form-control pe-5" placeholder="Enter password" id="password-input" value="{{old('password')}}" required>
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    <small class="text-danger">@error('password')
                                                        {{ $message }}
                                                    @enderror</small>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="auth-remember-check" checked required>
                                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100 d-flex justify-content-center align-items-center" type="submit" id="admin-login-button"><div class="" id="admin-login-button-spinner" style="margin-right: 5px;"></div>Sign In</button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <div class="signin-other-title">
                                                    <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0 text-muted">&copy; <script>document.write(new Date().getFullYear())</script> BOU Payroll. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="tel:+8801712834621" class="fw-semibold text-primary text-decoration-underline"> Md.M.H. Razib DCSA-IST-2019 </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->

        <!-- JAVASCRIPT -->
        <!-- Latest compiled JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        {{-- <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
        <script src="/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/assets/libs/node-waves/waves.min.js"></script>
        <script src="/assets/libs/feather-icons/feather.min.js"></script>
        <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="/assets/js/plugins.js"></script>

        <!-- particles js -->
        <script src="/assets/libs/particles.js/particles.js"></script>
        <!-- particles app js -->
        <script src="/assets/js/pages/particles.app.js"></script>
        <!-- password-addon init -->
        <script src="/assets/js/pages/password-addon.init.js"></script>
        <script>
            // Admin Login Form
            $(document).on("submit", "#admin-login-form", function() {
                $("#admin-login-button").attr("disabled", true);
                $("#admin-login-button-spinner").addClass("btn-spinner");
            });
        </script>
    </body>

</html>