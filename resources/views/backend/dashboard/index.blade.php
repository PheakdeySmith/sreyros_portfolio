@extends('backend.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <!-- Welcome Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card card-background card-background-mask-primary">
                <div class="full-background" style="background-image: url('{{ asset('backend/assets/img/curved-images/curved1.jpg') }}')"></div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <h4 class="text-white mb-0">Welcome to Your Portfolio Dashboard</h4>
                            <p class="text-white opacity-8 mb-4">Manage your portfolio content with ease</p>
                            <div class="d-flex">
                                <a href="{{ route('home') }}" target="_blank" class="btn btn-rounded btn-outline-white me-2">
                                    <i class="fas fa-external-link-alt me-2"></i> View Website
                                </a>
                                <a href="{{ route('admin.personal_info.edit') }}" class="btn btn-rounded btn-white">
                                    <i class="fas fa-user-edit me-2"></i> Update Profile
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex justify-content-end">
                            @if(isset($personalInfo) && $personalInfo->profile_image)
                                <div class="avatar avatar-xl position-relative">
                                    <img src="{{ asset('storage/' . $personalInfo->profile_image) }}" alt="Profile Image" class="w-100 border-radius-lg shadow-sm">
                                </div>
                            @else
                                <div class="avatar avatar-xl bg-gradient-primary border-radius-lg">
                                    <i class="fas fa-user-circle position-relative" style="font-size: 2rem; top: 10px;"></i>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Projects</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $projectsCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Skills</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $skillsCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="ni ni-chart-bar-32 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Services</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $servicesCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                                <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Testimonials</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $testimonialsCount }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                <i class="ni ni-chat-round text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <!-- Recent Projects -->
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Recent Projects</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">{{ $projectsCount }} total</span> projects
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-sm bg-gradient-primary mb-0">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Year</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Agency</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentProjects as $project)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                @if($project->thumbnail)
                                                <img src="{{ asset('storage/' . $project->thumbnail) }}" class="avatar avatar-sm me-3" alt="{{ $project->title }}">
                                                @else
                                                <div class="avatar avatar-sm me-3 bg-gradient-primary">
                                                    <i class="ni ni-image text-white opacity-10"></i>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $project->title }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $project->year }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $project->agency ?? 'N/A' }}</p>
                                    </td>
                                    <td>
                                        @if($project->is_featured)
                                        <span class="badge badge-sm bg-gradient-success">Featured</span>
                                        @else
                                        <span class="badge badge-sm bg-gradient-secondary">Standard</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit project">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">
                                        <p class="text-sm mb-0">No projects found</p>
                                        <a href="{{ route('admin.projects.create') }}" class="btn btn-sm bg-gradient-primary mt-3">Add Your First Project</a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Personal Info Card -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Personal Information</h6>
                </div>
                <div class="card-body p-3">
                    @if($personalInfo)
                    <div class="timeline timeline-one-side">
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-single-02 text-primary text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Name</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $personalInfo->name ?? 'Not Set' }}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-briefcase-24 text-success text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Title</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $personalInfo->title ?? 'Not Set' }}</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-email-83 text-info text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Email</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $personalInfo->email ?? 'Not Set' }}</p>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step">
                                <i class="ni ni-mobile-button text-warning text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Phone</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $personalInfo->phone ?? 'Not Set' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('admin.personal_info.edit') }}" class="btn btn-outline-primary btn-sm">Edit Information</a>
                    </div>
                    @else
                    <div class="text-center py-4">
                        <div class="icon icon-shape icon-xl rounded-circle bg-gradient-primary shadow text-center mb-4">
                            <i class="ni ni-single-02 text-white opacity-10"></i>
                        </div>
                        <h6 class="text-dark text-sm font-weight-bold mb-3">No personal information set</h6>
                        <a href="{{ route('admin.personal_info.edit') }}" class="btn btn-primary btn-sm">Add Information</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Quick Actions</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="row g-0 px-4 py-3">
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 p-2">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a href="{{ route('admin.projects.create') }}" class="d-block border-radius-xl">
                                        <div class="card bg-gradient-primary shadow-primary border-radius-xl p-4 text-center">
                                            <i class="fas fa-plus-circle text-white" style="font-size: 2.5rem;"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0 text-center">
                                    <a href="{{ route('admin.projects.create') }}">
                                        <h5>Add Project</h5>
                                    </a>
                                    <p class="text-sm mb-0 text-secondary">Showcase your latest work</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 p-2">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a href="{{ route('admin.skills.create') }}" class="d-block border-radius-xl">
                                        <div class="card bg-gradient-success shadow-success border-radius-xl p-4 text-center">
                                            <i class="fas fa-chart-bar text-white" style="font-size: 2.5rem;"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0 text-center">
                                    <a href="{{ route('admin.skills.create') }}">
                                        <h5>Add Skill</h5>
                                    </a>
                                    <p class="text-sm mb-0 text-secondary">Highlight your expertise</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 p-2">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a href="{{ route('admin.services.create') }}" class="d-block border-radius-xl">
                                        <div class="card bg-gradient-warning shadow-warning border-radius-xl p-4 text-center">
                                            <i class="fas fa-cogs text-white" style="font-size: 2.5rem;"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0 text-center">
                                    <a href="{{ route('admin.services.create') }}">
                                        <h5>Add Service</h5>
                                    </a>
                                    <p class="text-sm mb-0 text-secondary">Promote your offerings</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 p-2">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a href="{{ route('admin.testimonials.create') }}" class="d-block border-radius-xl">
                                        <div class="card bg-gradient-info shadow-info border-radius-xl p-4 text-center">
                                            <i class="fas fa-comment-dots text-white" style="font-size: 2.5rem;"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0 text-center">
                                    <a href="{{ route('admin.testimonials.create') }}">
                                        <h5>Add Testimonial</h5>
                                    </a>
                                    <p class="text-sm mb-0 text-secondary">Share client feedback</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Any dashboard-specific JavaScript can go here
    $(document).ready(function() {
        // Initialize any plugins or charts if needed
    });
</script>
@endpush
