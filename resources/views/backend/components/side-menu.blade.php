<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box" style="padding: 20px 20px 0 0">
        <!-- Dark Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                    <img src="/assets/images/bou_logo.webp" alt="" height="40" style="-webkit-filter: invert(1);filter: invert(1);">
                </span>
            <span class="logo-lg">
                    <img src="/assets/images/bou_logo.webp" alt="" height="40" style="-webkit-filter: invert(1);filter: invert(1);">
                </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                    <img src="/assets/images/bou_logo.webp" alt="" height="40" style="-webkit-filter: invert(1);filter: invert(1);">
                </span>
            <span class="logo-lg">
                    <img src="/assets/images/bou_logo.webp" alt="" height="40" style="-webkit-filter: invert(1);filter: invert(1);">
                </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link active" href="{{route('admin.dashboard')}}">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link active" href="{{route('admin.employee-list')}}">
                        <i class="mdi mdi-account-group"></i> <span data-key="t-employees">Employees</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link active" href="{{route('admin.report.page')}}">
                        <i class="mdi mdi-file-document-multiple-outline"></i> <span data-key="t-reports">Reports</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.dashboard')}}" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-projects.html" class="nav-link" data-key="t-projects"> Projects </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                <!-- end Dashboard Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>