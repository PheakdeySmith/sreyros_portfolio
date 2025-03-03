<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Soft UI Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('backend/assets/img/favicon.png') }}">

    <!-- Fonts and Icons -->
    <link href="{{ asset('backend/assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('backend/assets') }}/css/nucleo-icons.css" rel="stylesheet">
    <link href="{{ asset('backend/assets') }}/css/nucleo-svg.css" rel="stylesheet">

    <script src="{{ asset('backend/assets') }}/js/42d5adcbca.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Your custom styles -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link id="pagestyle" href="{{ asset('backend/assets') }}/css/soft-ui-dashboard.min.css" rel="stylesheet">
    {{--
    <script defer="" data-site="demos.creative-tim.com"
        src="{{ asset('backend/assets') }}/js/nepcha-analytics.js"></script> --}}
</head>

<body class="g-sidenav-show bg-gray-100">
    <!-- Sidebar -->
    @include('backend.partials.sidebar')

    <!-- Main content -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Content -->
        <div class="container-fluid py-4">
            @yield('content')

            <!-- Footer -->
            @include('backend.partials.footer')
        </div>
    </main>

    <!-- Core JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/smooth-scrollbar.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/fullcalendar.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/choices.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/datatables.js"></script>

    <!-- Kanban scripts -->
    <script src="{{ asset('backend/assets') }}/js/dragula.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/jkanban.js"></script>
    <script src="{{ asset('backend/assets') }}/js/chartjs.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/threejs.js"></script>
    <script src="{{ asset('backend/assets') }}/js/orbit-controls.js"></script>
    <script src="{{ asset('backend/assets') }}/js/leaflet.js"></script>
    <script src="{{ asset('backend/assets') }}/js/nouislider.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/sweetalert.min.js"></script>
    <script src="{{ asset('backend/assets') }}/js/sweet-alert.js"></script>

    <script src="{{ asset('backend/assets') }}/js/soft-ui-dashboard.min.js"></script>

    <!-- Setup CSRF token for AJAX requests -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
