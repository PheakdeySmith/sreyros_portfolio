@extends('backend.layouts.app')
@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
    <!-- Navbar -->
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
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Automotive</li>
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
                            <i class="fa fa-user me-sm-1"></i>
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
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
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
                                                <i class="fa fa-clock me-1"></i>
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
                                                <i class="fa fa-clock me-1"></i>
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
                                                <i class="fa fa-clock me-1"></i>
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
        <div class="row mt-4">
            <div class="col-12">
                <div class="card bg-gradient-secondary">
                    <img src="{{ asset('backend/assets') }}/image/waves-white.svg" alt="pattern-lines"
                        class="position-absolute opacity-4 start-0 top-0 w-100">
                    <div class="card-body px-5 z-index-1 bg-cover">
                        <div class="row">
                            <div class="col-lg-3 col-12 my-auto">
                                <h4 class="text-white opacity-9">Since Last Charge</h4>
                                <hr class="horizontal light mt-1 mb-3">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="mb-0 text-white opacity-7">Distance</h6>
                                        <h3 class="text-white">145 <small class="text-sm align-top">Km</small></h3>
                                    </div>
                                    <div class="ms-lg-6 ms-4">
                                        <h6 class="mb-0 text-white opacity-7">Average Energy</h6>
                                        <h3 class="text-white">300 <small class="text-sm align-top">Kw</small></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-center">
                                <img class="w-75 w-lg-auto mt-n7 mt-lg-n8 d-none d-md-block"
                                    src="{{ asset('backend/assets') }}/image/mercedes-eqc.png" alt="car image">
                                <div class="d-flex align-items-center">
                                    <h4 class="text-white opacity-7 ms-0 ms-md-auto">Available Range</h4>
                                    <h2 class="text-white ms-2 me-auto">70<small class="text-sm align-top">
                                            %</small></h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12 my-auto">
                                <h4 class="text-white opacity-9">Nearest Charger</h4>
                                <hr class="horizontal light mt-1 mb-3">
                                <div class="d-flex">
                                    <div>
                                        <h6 class="mb-0 text-white">Miclan, DW</h6>
                                        <h6 class="mb-0 text-white">891 Limarenda road</h6>
                                    </div>
                                    <div class="ms-lg-6 ms-4">
                                        <button class="btn btn-icon-only btn-rounded btn-outline-white mb-0">
                                            <i class="ni ni-map-big" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card bg-gradient-secondary">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">
                                        Today's Trip</p>
                                    <h5 class="text-white font-weight-bolder mb-0">
                                        145 Km
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-dark text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-md-0">
                <div class="card bg-gradient-secondary">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">
                                        Battery Health</p>
                                    <h5 class="text-white font-weight-bolder mb-0">
                                        99 %
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                    <i class="ni ni-controller text-dark text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0">
                <div class="card bg-gradient-secondary">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">
                                        Average Speed</p>
                                    <h5 class="text-white font-weight-bolder mb-0">
                                        56 Km/h
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                    <i class="ni ni-delivery-fast text-dark text-lg opacity-10"
                                        aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0">
                <div class="card bg-gradient-secondary">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">
                                        Music Volume</p>
                                    <h5 class="text-white font-weight-bolder mb-0">
                                        15/100
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                    <i class="ni ni-note-03 text-dark text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card bg-gradient-dark">
                    <div class="card-header bg-transparent">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-white bg-transparent border-0">
                                        <i class="ni ni-zoom-split-in text-lg" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control bg-transparent border-0"
                                        placeholder="Search anything..." onfocus="focused(this)"
                                        onfocusout="defocused(this)" data-sharkid="__1">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 my-auto ms-auto">
                                <div class="d-flex align-items-center">
                                    <i class="ni ni-headphones text-lg text-white ms-auto" data-bs-toggle="tooltip"
                                        data-bs-placement="top" aria-label="Headphones connected"
                                        data-bs-original-title="Headphones connected"></i>
                                    <i class="ni ni-button-play text-lg text-white ms-3" data-bs-toggle="tooltip"
                                        data-bs-placement="top" aria-label="Music is playing"
                                        data-bs-original-title="Music is playing"></i>
                                    <i class="ni ni-button-power text-lg text-white ms-3" data-bs-toggle="tooltip"
                                        data-bs-placement="top" aria-label="Start radio"
                                        data-bs-original-title="Start radio"></i>
                                    <i class="ni ni-watch-time text-lg text-white ms-3" data-bs-toggle="tooltip"
                                        data-bs-placement="top" aria-label="Time tracker"
                                        data-bs-original-title="Time tracker"></i>
                                    <h4 class="text-white mb-1 ms-4">10:45</h4>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal light">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="d-flex align-items-center position-relative">
                                    <h3 class="text-white mb-1">11:13</h3>
                                    <p class="text-white opacity-8 mb-1 ms-3">Estimated arrival time</p>
                                    <hr class="vertical light mt-0">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="d-flex align-items-center position-relative">
                                    <h3 class="text-white mb-1 ms-auto">2.4<small class="align-top text-sm">Km</small>
                                    </h3>
                                    <p class="text-white opacity-8 mb-1 ms-3 me-auto">Turn right in 2.4 miles</p>
                                    <hr class="vertical light mt-0">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 ms-lg-auto">
                                <div class="d-flex align-items-center">
                                    <h3 class="text-white mb-1 ms-lg-auto">6.3<small
                                            class="align-top text-sm">Km</small></h3>
                                    <p class="text-white opacity-8 mb-1 ms-3">Distance to Creative Tim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div id="mapid"
                            class="leaflet leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                            style="position: relative;" tabindex="0">
                            <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="leaflet-pane leaflet-tile-pane">
                                    <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                        <div class="leaflet-tile-container leaflet-zoom-animated"
                                            style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);">
                                            <img alt="" src="{{ asset('backend/assets') }}/image/783@2x.png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(398px, -5px, 0px); opacity: 1;"><img
                                                alt="" src="{{ asset('backend/assets') }}/image/783@2x(1).png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(654px, -5px, 0px); opacity: 1;"><img
                                                alt="" src="{{ asset('backend/assets') }}/image/783@2x(2).png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(142px, -5px, 0px); opacity: 1;"><img
                                                alt="" src="{{ asset('backend/assets') }}/image/783@2x(3).png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(910px, -5px, 0px); opacity: 1;"><img
                                                alt="" src="{{ asset('backend/assets') }}/image/783@2x(4).png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(-114px, -5px, 0px); opacity: 1;"><img
                                                alt="" src="{{ asset('backend/assets') }}/image/783@2x(5).png"
                                                class="leaflet-tile leaflet-tile-loaded"
                                                style="width: 256px; height: 256px; transform: translate3d(1166px, -5px, 0px); opacity: 1;">
                                        </div>
                                    </div>
                                </div>
                                <div class="leaflet-pane leaflet-overlay-pane"></div>
                                <div class="leaflet-pane leaflet-shadow-pane"></div>
                                <div class="leaflet-pane leaflet-marker-pane"></div>
                                <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                <div class="leaflet-pane leaflet-popup-pane"></div>
                                <div class="leaflet-proxy leaflet-zoom-animated"></div>
                            </div>
                            <div class="leaflet-control-container">
                                <div class="leaflet-top leaflet-left">
                                    <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a
                                            class="leaflet-control-zoom-in"
                                            href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/automotive.html#"
                                            title="Zoom in" role="button" aria-label="Zoom in"
                                            aria-disabled="false"><span aria-hidden="true">+</span></a><a
                                            class="leaflet-control-zoom-out"
                                            href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/automotive.html#"
                                            title="Zoom out" role="button" aria-label="Zoom out"
                                            aria-disabled="false"><span aria-hidden="true">−</span></a></div>
                                </div>
                                <div class="leaflet-top leaflet-right"></div>
                                <div class="leaflet-bottom leaflet-left"></div>
                                <div class="leaflet-bottom leaflet-right">
                                    <div class="leaflet-control-attribution leaflet-control"><a
                                            href="https://leafletjs.com/"
                                            title="A JavaScript library for interactive maps"><svg aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="12" height="8"
                                                viewBox="0 0 12 8" class="leaflet-attribution-flag">
                                                <path fill="#4C7BE1" d="M0 0h12v4H0z"></path>
                                                <path fill="#FFD500" d="M0 4h12v3H0z"></path>
                                                <path fill="#E0BC00" d="M0 7h12v1H0z"></path>
                                            </svg> Leaflet</a> <span aria-hidden="true">|</span> © <a
                                            href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>
                                        contributors © <a href="https://carto.com/attributions">CARTO</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="position-relative">
                                        <div class="avatar avatar-lg">
                                            <img src="{{ asset('backend/assets') }}/image/curved10.webp" alt="kal"
                                                class="border-radius-xl rounded-circle shadow">
                                        </div>
                                        <img class="position-absolute w-60 end-0 bottom-0 me-n3 mb-0"
                                            src="{{ asset('backend/assets') }}/image/logo-spotify.svg" alt="spotify logo">
                                    </div>
                                    <div class="px-3">
                                        <p class="text-white text-sm font-weight-bold mb-0">
                                            You're Mines Still (feat Drake)
                                        </p>
                                        <p class="text-white text-xs mb-2 opacity-8">
                                            Yung Bleu - Hip-Hop
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 my-auto text-center mt-3 mt-lg-0">
                                <div class="d-flex align-items-center">
                                    <button
                                        class="btn btn-lg btn-icon-only btn-rounded btn-outline-white mb-0 ms-auto">
                                        <i class="ni ni-button-play top-0 rotate-180" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-white mb-0 ms-4">
                                        <i class="ni ni-button-pause top-0" aria-hidden="true"></i>
                                    </button>
                                    <button
                                        class="btn btn-lg btn-icon-only btn-rounded btn-outline-white mb-0 ms-4 me-auto">
                                        <i class="ni ni-button-play top-0" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-8 my-auto">
                                <p class="text-white mb-2">Volume</p>
                                <div id="sliderRegular" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                    <div class="noUi-base">
                                        <div class="noUi-connects">
                                            <div class="noUi-connect"
                                                style="transform: translate(0%, 0px) scale(0.4, 1);"></div>
                                        </div>
                                        <div class="noUi-origin" style="transform: translate(-60%, 0px); z-index: 4;">
                                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                                role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                                aria-valuemax="100.0" aria-valuenow="40.0" aria-valuetext="40.00">
                                                <div class="noUi-touch-area"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-6 col-4 my-auto ms-auto">
                                <i class="ni ni-bullet-list-67 text-white mt-3 ms-auto" data-bs-toggle="tooltip"
                                    data-bs-placement="top" aria-label="Hide menu"
                                    data-bs-original-title="Hide menu"></i>
                                <i class="ni ni-chat-round text-white ms-3 mt-3" data-bs-toggle="tooltip"
                                    data-bs-placement="top" aria-label="Track messages"
                                    data-bs-original-title="Track messages"></i>
                            </div>
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
                            made with <i class="fa fa-heart"></i> by
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
    <div class="ps__rail-y" style="top: 0px; height: 720px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 448px;"></div>
    </div>
</main>

@endsection
