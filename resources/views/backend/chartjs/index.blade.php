@extends('backend.layouts.app')
@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
        id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none me-2 ">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Charts</li>
                </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)"
                            onfocusout="defocused(this)" data-sharkid="__0" data-sharklabel="dobDay">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/authentication/signin/illustration.html"
                            class="nav-link text-body font-weight-bold px-0" target="_blank">
                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{ asset('backend/assets') }}/image/team-2.jpg" class="avatar avatar-sm  me-3 "
                                                alt="user image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{ asset('backend/assets') }}/image/logo-spotify.svg"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-6">
                <h5 class="mb-0">Charts</h5>
                <p class="text-sm mb-0">
                    Charts on this page use Chart.js - Simple yet flexible JavaScript charting for designers &amp;
                    developers.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Line chart</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="line-chart" class="chart-canvas" height="337"
                                style="display: block; box-sizing: border-box; height: 300px; width: 648px;"
                                width="729"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Line chart with gradient</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="line-chart-gradient" class="chart-canvas" height="337"
                                style="display: block; box-sizing: border-box; height: 300px; width: 648px;"
                                width="729"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Bar chart</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="bar-chart" class="chart-canvas" height="337"
                                style="display: block; box-sizing: border-box; height: 300px; width: 648px;"
                                width="729"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Bar chart horizontal</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="bar-chart-horizontal" class="chart-canvas" height="337"
                                style="display: block; box-sizing: border-box; height: 300px; width: 648px;"
                                width="729"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Mixed chart</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="mixed-chart" class="chart-canvas" height="337"
                                style="display: block; box-sizing: border-box; height: 300px; width: 648px;"
                                width="729"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Bubble chart</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="bubble-chart" class="chart-canvas" height="335"
                                style="display: block; box-sizing: border-box; height: 298px; width: 638px;"
                                width="717"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Doughnut chart</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="doughnut-chart" class="chart-canvas" height="337"
                                style="display: block; box-sizing: border-box; height: 300px; width: 648px;"
                                width="729"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Pie chart</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="pie-chart" class="chart-canvas" height="337"
                                style="display: block; box-sizing: border-box; height: 300px; width: 648px;"
                                width="729"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Radar chart</h6>
                    </div>
                    <div class="card-body p-5">
                        <div class="chart">
                            <canvas id="radar-chart" class="chart-canvas" height="646"
                                style="display: block; box-sizing: border-box; height: 575px; width: 575px;"
                                width="646"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="card z-index-2">
                    <div class="card-header p-3 pb-0">
                        <h6>Polar chart</h6>
                    </div>
                    <div class="card-body p-5">
                        <div class="chart">
                            <canvas id="polar-chart" class="chart-canvas" height="646"
                                style="display: block; box-sizing: border-box; height: 575px; width: 575px;"
                                width="646"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>2025,
                            made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://www.creative-tim.com/" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/" class="nav-link text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 800px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 246px;"></div>
    </div>
</main>

@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/chartjs.js') }}"></script>
@endpush


