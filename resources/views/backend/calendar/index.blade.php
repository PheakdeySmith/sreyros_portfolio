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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Calendar</li>
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
            <div class="row">
                <div class="col-12 ms-auto">
                    <div class="d-flex mb-4">
                        <div class="pe-4 mt-1 position-relative ms-auto">
                            <p class="text-secondary text-xs font-weight-bold mb-2">Team members:</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                        aria-label="Jessica Rowland" data-bs-original-title="Jessica Rowland">
                                        <img alt="Image placeholder" src="{{ asset('backend/assets') }}/image/team-1.jpg" class="">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                        aria-label="Audrey Love" data-bs-original-title="Audrey Love">
                                        <img alt="Image placeholder" src="{{ asset('backend/assets') }}/image/team-2.jpg"
                                            class="rounded-circle">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                        aria-label="Michael Lewis" data-bs-original-title="Michael Lewis">
                                        <img alt="Image placeholder" src="{{ asset('backend/assets') }}/image/team-3.jpg"
                                            class="rounded-circle">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                        aria-label="Lucia Linda" data-bs-original-title="Lucia Linda">
                                        <img alt="Image placeholder" src="{{ asset('backend/assets') }}/image/team-4.jpg"
                                            class="rounded-circle">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip"
                                        aria-label="Ronald Miller" data-bs-original-title="Ronald Miller">
                                        <img alt="Image placeholder" src="{{ asset('backend/assets') }}/image/team-5.jpg"
                                            class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                            <hr class="vertical dark mt-0">
                        </div>
                        <div class="ps-4">
                            <button class="btn btn-outline-dark btn-icon-only mb-0 mt-3" data-bs-toggle="modal"
                                data-target="#new-board-modal">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="card card-calendar">
                        <div class="card-body p-3">
                            <div class="calendar fc fc-media-screen fc-direction-ltr fc-theme-standard"
                                data-bs-toggle="calendar" id="calendar">
                                <div class="fc-header-toolbar fc-toolbar ">
                                    <div class="fc-toolbar-chunk">
                                        <h2 class="fc-toolbar-title" id="fc-dom-1">December 2020</h2>
                                    </div>
                                    <div class="fc-toolbar-chunk"></div>
                                    <div class="fc-toolbar-chunk"><button type="button" title="This month"
                                            aria-pressed="false"
                                            class="fc-today-button fc-button fc-button-primary">today</button>
                                        <div class="fc-button-group"><button type="button" title="Previous month"
                                                aria-pressed="false"
                                                class="fc-prev-button fc-button fc-button-primary"><span
                                                    class="fc-icon fc-icon-chevron-left" role="img"></span></button><button
                                                type="button" title="Next month" aria-pressed="false"
                                                class="fc-next-button fc-button fc-button-primary"><span
                                                    class="fc-icon fc-icon-chevron-right" role="img"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-passive">
                                    <div class="fc-dayGridMonth-view fc-view fc-daygrid">
                                        <table role="grid" class="fc-scrollgrid ">
                                            <thead role="rowgroup">
                                                <tr role="presentation"
                                                    class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                    <th role="presentation">
                                                        <div class="fc-scroller-harness">
                                                            <div class="fc-scroller" style="overflow: visible;">
                                                                <table role="presentation" class="fc-col-header "
                                                                    style="width: 859px;">
                                                                    <colgroup></colgroup>
                                                                    <thead role="presentation">
                                                                        <tr role="row">
                                                                            <th role="columnheader"
                                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                                        aria-label="Sunday"
                                                                                        class="fc-col-header-cell-cushion">Sun</a>
                                                                                </div>
                                                                            </th>
                                                                            <th role="columnheader"
                                                                                class="fc-col-header-cell fc-day fc-day-mon">
                                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                                        aria-label="Monday"
                                                                                        class="fc-col-header-cell-cushion">Mon</a>
                                                                                </div>
                                                                            </th>
                                                                            <th role="columnheader"
                                                                                class="fc-col-header-cell fc-day fc-day-tue">
                                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                                        aria-label="Tuesday"
                                                                                        class="fc-col-header-cell-cushion">Tue</a>
                                                                                </div>
                                                                            </th>
                                                                            <th role="columnheader"
                                                                                class="fc-col-header-cell fc-day fc-day-wed">
                                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                                        aria-label="Wednesday"
                                                                                        class="fc-col-header-cell-cushion">Wed</a>
                                                                                </div>
                                                                            </th>
                                                                            <th role="columnheader"
                                                                                class="fc-col-header-cell fc-day fc-day-thu">
                                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                                        aria-label="Thursday"
                                                                                        class="fc-col-header-cell-cushion">Thu</a>
                                                                                </div>
                                                                            </th>
                                                                            <th role="columnheader"
                                                                                class="fc-col-header-cell fc-day fc-day-fri">
                                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                                        aria-label="Friday"
                                                                                        class="fc-col-header-cell-cushion">Fri</a>
                                                                                </div>
                                                                            </th>
                                                                            <th role="columnheader"
                                                                                class="fc-col-header-cell fc-day fc-day-sat">
                                                                                <div class="fc-scrollgrid-sync-inner"><a
                                                                                        aria-label="Saturday"
                                                                                        class="fc-col-header-cell-cushion">Sat</a>
                                                                                </div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody role="rowgroup">
                                                <tr role="presentation"
                                                    class="fc-scrollgrid-section fc-scrollgrid-section-body ">
                                                    <td role="presentation">
                                                        <div class="fc-scroller-harness">
                                                            <div class="fc-scroller" style="overflow: visible;">
                                                                <div class="fc-daygrid-body fc-daygrid-body-unbalanced fc-daygrid-body-natural"
                                                                    style="width: 859px;">
                                                                    <table role="presentation"
                                                                        class="fc-scrollgrid-sync-table"
                                                                        style="width: 859px;">
                                                                        <colgroup></colgroup>
                                                                        <tbody role="presentation">
                                                                            <tr role="row">
                                                                                <td aria-labelledby="fc-dom-2"
                                                                                    role="gridcell" data-date="2020-11-29"
                                                                                    class="fc-day fc-day-sun fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="November 29, 2020"
                                                                                                id="fc-dom-2"
                                                                                                class="fc-daygrid-day-number">29</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                style="margin-top: 0px;">
                                                                                                <a
                                                                                                    class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-success fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                    <div
                                                                                                        class="fc-event-main">
                                                                                                        <div
                                                                                                            class="fc-event-main-frame">
                                                                                                            <div
                                                                                                                class="fc-event-title-container">
                                                                                                                <div
                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                    All
                                                                                                                    day
                                                                                                                    conference
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-4"
                                                                                    role="gridcell" data-date="2020-11-30"
                                                                                    class="fc-day fc-day-mon fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="November 30, 2020"
                                                                                                id="fc-dom-4"
                                                                                                class="fc-daygrid-day-number">30</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-6"
                                                                                    role="gridcell" data-date="2020-12-01"
                                                                                    class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 1, 2020"
                                                                                                id="fc-dom-6"
                                                                                                class="fc-daygrid-day-number">1</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                style="margin-top: 0px;">
                                                                                                <a
                                                                                                    class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-info fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                    <div
                                                                                                        class="fc-event-main">
                                                                                                        <div
                                                                                                            class="fc-event-main-frame">
                                                                                                            <div
                                                                                                                class="fc-event-title-container">
                                                                                                                <div
                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                    Meeting
                                                                                                                    with
                                                                                                                    Mary
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-8"
                                                                                    role="gridcell" data-date="2020-12-02"
                                                                                    class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 2, 2020"
                                                                                                id="fc-dom-8"
                                                                                                class="fc-daygrid-day-number">2</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                style="margin-top: 0px;">
                                                                                                <a
                                                                                                    class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-warning fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                    <div
                                                                                                        class="fc-event-main">
                                                                                                        <div
                                                                                                            class="fc-event-main-frame">
                                                                                                            <div
                                                                                                                class="fc-event-title-container">
                                                                                                                <div
                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                    Cyber
                                                                                                                    Week
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-10"
                                                                                    role="gridcell" data-date="2020-12-03"
                                                                                    class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 3, 2020"
                                                                                                id="fc-dom-10"
                                                                                                class="fc-daygrid-day-number">3</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                style="margin-top: 0px;">
                                                                                                <a
                                                                                                    class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-danger fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                    <div
                                                                                                        class="fc-event-main">
                                                                                                        <div
                                                                                                            class="fc-event-main-frame">
                                                                                                            <div
                                                                                                                class="fc-event-title-container">
                                                                                                                <div
                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                    Winter
                                                                                                                    Hackaton
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-12"
                                                                                    role="gridcell" data-date="2020-12-04"
                                                                                    class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 4, 2020"
                                                                                                id="fc-dom-12"
                                                                                                class="fc-daygrid-day-number">4</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-14"
                                                                                    role="gridcell" data-date="2020-12-05"
                                                                                    class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 5, 2020"
                                                                                                id="fc-dom-14"
                                                                                                class="fc-daygrid-day-number">5</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row">
                                                                                <td aria-labelledby="fc-dom-16"
                                                                                    role="gridcell" data-date="2020-12-06"
                                                                                    class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 6, 2020"
                                                                                                id="fc-dom-16"
                                                                                                class="fc-daygrid-day-number">6</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-18"
                                                                                    role="gridcell" data-date="2020-12-07"
                                                                                    class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 7, 2020"
                                                                                                id="fc-dom-18"
                                                                                                class="fc-daygrid-day-number">7</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                style="top: 0px; left: 0px; right: -122.712px;">
                                                                                                <a
                                                                                                    class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-warning fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                    <div
                                                                                                        class="fc-event-main">
                                                                                                        <div
                                                                                                            class="fc-event-main-frame">
                                                                                                            <div
                                                                                                                class="fc-event-title-container">
                                                                                                                <div
                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                    Digital
                                                                                                                    event
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 29px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-20"
                                                                                    role="gridcell" data-date="2020-12-08"
                                                                                    class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 8, 2020"
                                                                                                id="fc-dom-20"
                                                                                                class="fc-daygrid-day-number">8</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 29px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-22"
                                                                                    role="gridcell" data-date="2020-12-09"
                                                                                    class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 9, 2020"
                                                                                                id="fc-dom-22"
                                                                                                class="fc-daygrid-day-number">9</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-24"
                                                                                    role="gridcell" data-date="2020-12-10"
                                                                                    class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 10, 2020"
                                                                                                id="fc-dom-24"
                                                                                                class="fc-daygrid-day-number">10</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                style="margin-top: 0px;">
                                                                                                <a
                                                                                                    class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-primary fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                    <div
                                                                                                        class="fc-event-main">
                                                                                                        <div
                                                                                                            class="fc-event-main-frame">
                                                                                                            <div
                                                                                                                class="fc-event-title-container">
                                                                                                                <div
                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                    Marketing
                                                                                                                    event
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-26"
                                                                                    role="gridcell" data-date="2020-12-11"
                                                                                    class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 11, 2020"
                                                                                                id="fc-dom-26"
                                                                                                class="fc-daygrid-day-number">11</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-28"
                                                                                    role="gridcell" data-date="2020-12-12"
                                                                                    class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 12, 2020"
                                                                                                id="fc-dom-28"
                                                                                                class="fc-daygrid-day-number">12</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row">
                                                                                <td aria-labelledby="fc-dom-30"
                                                                                    role="gridcell" data-date="2020-12-13"
                                                                                    class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 13, 2020"
                                                                                                id="fc-dom-30"
                                                                                                class="fc-daygrid-day-number">13</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-32"
                                                                                    role="gridcell" data-date="2020-12-14"
                                                                                    class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 14, 2020"
                                                                                                id="fc-dom-32"
                                                                                                class="fc-daygrid-day-number">14</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-34"
                                                                                    role="gridcell" data-date="2020-12-15"
                                                                                    class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 15, 2020"
                                                                                                id="fc-dom-34"
                                                                                                class="fc-daygrid-day-number">15</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-36"
                                                                                    role="gridcell" data-date="2020-12-16"
                                                                                    class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 16, 2020"
                                                                                                id="fc-dom-36"
                                                                                                class="fc-daygrid-day-number">16</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-38"
                                                                                    role="gridcell" data-date="2020-12-17"
                                                                                    class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 17, 2020"
                                                                                                id="fc-dom-38"
                                                                                                class="fc-daygrid-day-number">17</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-40"
                                                                                    role="gridcell" data-date="2020-12-18"
                                                                                    class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 18, 2020"
                                                                                                id="fc-dom-40"
                                                                                                class="fc-daygrid-day-number">18</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-42"
                                                                                    role="gridcell" data-date="2020-12-19"
                                                                                    class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 19, 2020"
                                                                                                id="fc-dom-42"
                                                                                                class="fc-daygrid-day-number">19</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                style="margin-top: 0px;">
                                                                                                <a
                                                                                                    class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-danger fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                    <div
                                                                                                        class="fc-event-main">
                                                                                                        <div
                                                                                                            class="fc-event-main-frame">
                                                                                                            <div
                                                                                                                class="fc-event-title-container">
                                                                                                                <div
                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                    Dinner
                                                                                                                    with
                                                                                                                    Family
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row">
                                                                                <td aria-labelledby="fc-dom-44"
                                                                                    role="gridcell" data-date="2020-12-20"
                                                                                    class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 20, 2020"
                                                                                                id="fc-dom-44"
                                                                                                class="fc-daygrid-day-number">20</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-46"
                                                                                    role="gridcell" data-date="2020-12-21"
                                                                                    class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 21, 2020"
                                                                                                id="fc-dom-46"
                                                                                                class="fc-daygrid-day-number">21</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-48"
                                                                                    role="gridcell" data-date="2020-12-22"
                                                                                    class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 22, 2020"
                                                                                                id="fc-dom-48"
                                                                                                class="fc-daygrid-day-number">22</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-50"
                                                                                    role="gridcell" data-date="2020-12-23"
                                                                                    class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 23, 2020"
                                                                                                id="fc-dom-50"
                                                                                                class="fc-daygrid-day-number">23</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                style="margin-top: 0px;">
                                                                                                <a
                                                                                                    class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past bg-gradient-info fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                                                                    <div
                                                                                                        class="fc-event-main">
                                                                                                        <div
                                                                                                            class="fc-event-main-frame">
                                                                                                            <div
                                                                                                                class="fc-event-title-container">
                                                                                                                <div
                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                    Black
                                                                                                                    Friday
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-52"
                                                                                    role="gridcell" data-date="2020-12-24"
                                                                                    class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 24, 2020"
                                                                                                id="fc-dom-52"
                                                                                                class="fc-daygrid-day-number">24</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-54"
                                                                                    role="gridcell" data-date="2020-12-25"
                                                                                    class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 25, 2020"
                                                                                                id="fc-dom-54"
                                                                                                class="fc-daygrid-day-number">25</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-56"
                                                                                    role="gridcell" data-date="2020-12-26"
                                                                                    class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 26, 2020"
                                                                                                id="fc-dom-56"
                                                                                                class="fc-daygrid-day-number">26</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row">
                                                                                <td aria-labelledby="fc-dom-58"
                                                                                    role="gridcell" data-date="2020-12-27"
                                                                                    class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 27, 2020"
                                                                                                id="fc-dom-58"
                                                                                                class="fc-daygrid-day-number">27</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-60"
                                                                                    role="gridcell" data-date="2020-12-28"
                                                                                    class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 28, 2020"
                                                                                                id="fc-dom-60"
                                                                                                class="fc-daygrid-day-number">28</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-62"
                                                                                    role="gridcell" data-date="2020-12-29"
                                                                                    class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 29, 2020"
                                                                                                id="fc-dom-62"
                                                                                                class="fc-daygrid-day-number">29</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-64"
                                                                                    role="gridcell" data-date="2020-12-30"
                                                                                    class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 30, 2020"
                                                                                                id="fc-dom-64"
                                                                                                class="fc-daygrid-day-number">30</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-66"
                                                                                    role="gridcell" data-date="2020-12-31"
                                                                                    class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="December 31, 2020"
                                                                                                id="fc-dom-66"
                                                                                                class="fc-daygrid-day-number">31</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-68"
                                                                                    role="gridcell" data-date="2021-01-01"
                                                                                    class="fc-day fc-day-fri fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 1, 2021"
                                                                                                id="fc-dom-68"
                                                                                                class="fc-daygrid-day-number">1</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-70"
                                                                                    role="gridcell" data-date="2021-01-02"
                                                                                    class="fc-day fc-day-sat fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 2, 2021"
                                                                                                id="fc-dom-70"
                                                                                                class="fc-daygrid-day-number">2</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr role="row">
                                                                                <td aria-labelledby="fc-dom-72"
                                                                                    role="gridcell" data-date="2021-01-03"
                                                                                    class="fc-day fc-day-sun fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 3, 2021"
                                                                                                id="fc-dom-72"
                                                                                                class="fc-daygrid-day-number">3</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-74"
                                                                                    role="gridcell" data-date="2021-01-04"
                                                                                    class="fc-day fc-day-mon fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 4, 2021"
                                                                                                id="fc-dom-74"
                                                                                                class="fc-daygrid-day-number">4</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-76"
                                                                                    role="gridcell" data-date="2021-01-05"
                                                                                    class="fc-day fc-day-tue fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 5, 2021"
                                                                                                id="fc-dom-76"
                                                                                                class="fc-daygrid-day-number">5</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-78"
                                                                                    role="gridcell" data-date="2021-01-06"
                                                                                    class="fc-day fc-day-wed fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 6, 2021"
                                                                                                id="fc-dom-78"
                                                                                                class="fc-daygrid-day-number">6</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-80"
                                                                                    role="gridcell" data-date="2021-01-07"
                                                                                    class="fc-day fc-day-thu fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 7, 2021"
                                                                                                id="fc-dom-80"
                                                                                                class="fc-daygrid-day-number">7</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-82"
                                                                                    role="gridcell" data-date="2021-01-08"
                                                                                    class="fc-day fc-day-fri fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 8, 2021"
                                                                                                id="fc-dom-82"
                                                                                                class="fc-daygrid-day-number">8</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td aria-labelledby="fc-dom-84"
                                                                                    role="gridcell" data-date="2021-01-09"
                                                                                    class="fc-day fc-day-sat fc-day-past fc-day-other fc-daygrid-day">
                                                                                    <div
                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                        <div class="fc-daygrid-day-top">
                                                                                            <a aria-label="January 9, 2021"
                                                                                                id="fc-dom-84"
                                                                                                class="fc-daygrid-day-number">9</a>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-events">
                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                style="margin-top: 0px;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="fc-daygrid-day-bg">
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row">
                        <div class="col-xl-12 col-md-6 mt-xl-0 mt-4">
                            <div class="card">
                                <div class="card-header p-3 pb-0">
                                    <h6 class="mb-0">Next events</h6>
                                </div>
                                <div class="card-body border-radius-lg p-3">
                                    <div class="d-flex">
                                        <div>
                                            <div
                                                class="icon icon-shape bg-danger-soft shadow text-center border-radius-md shadow-none">
                                                <i class="ni ni-money-coins text-lg text-danger text-gradient opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-dark text-sm">Cyber Week</h6>
                                                <span class="text-sm">27 March 2021, at 12:30 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div>
                                            <div
                                                class="icon icon-shape bg-primary-soft shadow text-center border-radius-md shadow-none">
                                                <i class="ni ni-bell-55 text-lg text-primary text-gradient opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-dark text-sm">Meeting with Marry</h6>
                                                <span class="text-sm">24 March 2021, at 10:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div>
                                            <div
                                                class="icon icon-shape bg-success-soft shadow text-center border-radius-md shadow-none">
                                                <i class="ni ni-books text-lg text-success text-gradient opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-dark text-sm">Book Deposit Hall</h6>
                                                <span class="text-sm">25 March 2021, at 9:30 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div>
                                            <div
                                                class="icon icon-shape bg-warning-soft shadow text-center border-radius-md shadow-none">
                                                <i class="ni ni-delivery-fast text-lg text-warning text-gradient opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-dark text-sm">Shipment Deal UK</h6>
                                                <span class="text-sm">25 March 2021, at 2:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div>
                                            <div
                                                class="icon icon-shape bg-info-soft shadow text-center border-radius-md shadow-none">
                                                <i class="ni ni-palette text-lg text-info text-gradient opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-dark text-sm">Verify Dashboard Color Palette</h6>
                                                <span class="text-sm">26 March 2021, at 9:00 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6 mt-4">
                            <div class="card bg-gradient-dark">
                                <div class="card-header bg-transparent p-3 pb-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h6 class="text-white mb-0">Productivity</h6>
                                            <p class="text-sm text-white">
                                                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                                <span class="font-weight-bold">4% more</span> in 2021
                                            </p>
                                        </div>
                                        <div class="col-5 text-end">
                                            <div class="dropdown me-3">
                                                <a class="cursor-pointer" href="javascript:;" id="dropdownTable"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                    <i class="fa fa-ellipsis-h text-white" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end ms-n5 px-2 py-3"
                                                    aria-labelledby="dropdownTable" data-popper-placement="bottom-start">
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Another action</a></li>
                                                    <li><a class="dropdown-item border-radius-md"
                                                            href="javascript:;">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="chart">
                                        <canvas id="chart-line-1" class="chart-canvas" height="125"
                                            style="display: block; box-sizing: border-box; height: 100px; width: 285px;"
                                            width="356"></canvas>
                                    </div>
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
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 564px;"></div>
        </div>
    </main>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<!-- Your calendar script -->
<script src="/backend/assets/js/calendar.js"></script>
@endpush
