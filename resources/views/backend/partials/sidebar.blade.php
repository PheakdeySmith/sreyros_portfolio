<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps ps--active-y bg-transparent"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
            href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/default.html" target="_blank">
            <img src="{{ asset('backend/assets') }}/image/logo-ct-dark.webp" class="navbar-brand-img h-100"
                alt="main_logo">
            <span class="ms-1 font-weight-bold">Portfolio</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto ps" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <!-- Personal Info -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.personal_info.*') ? 'active' : '' }}" href="{{ route('admin.personal_info.edit') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Personal Info</span>
                </a>
            </li>

            <!-- Projects -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}" href="{{ route('admin.projects.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Projects</span>
                </a>
            </li>

            <!-- Skills -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.skills.*') ? 'active' : '' }}" href="{{ route('admin.skills.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-bar-32 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Skills</span>
                </a>
            </li>

            <!-- Services -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Services</span>
                </a>
            </li>

            <!-- Testimonials -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}" href="{{ route('admin.testimonials.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chat-round text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Testimonials</span>
                </a>
            </li>

            <!-- Calendar & Events -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.calendar') ? 'active' : '' }}" href="{{ route('admin.calendar') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Calendar</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.events.*') ? 'active' : '' }}" href="{{ route('admin.events.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-notification-70 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Events</span>
                </a>
            </li>

            <!-- Social Links -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.social-links.*') ? 'active' : '' }}" href="{{ route('admin.social-links.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Social Links</span>
                </a>
            </li>

            <!-- View Website -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">External Links</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}" target="_blank">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">View Website</span>
                </a>
            </li>
        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>
    <div class="sidenav-footer mx-3 mt-3 pt-3">
        <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
            <div class="full-background"
                style="background-image: url(&#39;{{ asset('backend/assets') }}/image/white-curved.jpg&#39;)"></div>
            <div class="card-body text-start p-3 w-100">
                <div
                    class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                    <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true"
                        id="sidenavCardIcon"></i>
                </div>
                <div class="docs-info">
                    <h6 class="up mb-0 text-dark">Need help?</h6>
                    <p class="text-xs font-weight-bold">Please check our docs</p>
                    <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard"
                        target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                </div>
            </div>
        </div>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 688px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 427px;"></div>
    </div>
</aside>
