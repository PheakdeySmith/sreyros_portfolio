@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Title -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Personal Information</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                        <i class="uil uil-arrow-left me-1"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Messages -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Form Card -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.personal_info.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $personalInfo->name ?? '') }}" required>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Professional Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $personalInfo->title ?? '') }}" required>
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $personalInfo->email ?? '') }}" required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $personalInfo->phone ?? '') }}">
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $personalInfo->address ?? '') }}">
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="about_text" class="form-label">About Text <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('about_text') is-invalid @enderror" id="about_text" name="about_text" rows="6" required>{{ old('about_text', $personalInfo->about_text ?? '') }}</textarea>
                            <small class="text-muted">Use line breaks to separate paragraphs.</small>
                            @error('about_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="profile_image" class="form-label">Profile Image</label>
                                    <input type="file" class="form-control @error('profile_image') is-invalid @enderror" id="profile_image" name="profile_image">
                                    <small class="text-muted">Recommended size: 400x400px. Max file size: 2MB.</small>

                                    @if(isset($personalInfo) && $personalInfo->profile_image)
                                    <div class="mt-2">
                                        <p class="mb-1">Current Profile Image:</p>
                                        <img src="{{ asset('storage/' . $personalInfo->profile_image) }}" alt="Profile Image" class="img-thumbnail rounded-circle" style="max-height: 100px; max-width: 100px;">
                                    </div>
                                    @endif

                                    @error('profile_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="resume" class="form-label">Resume/CV</label>
                                    <input type="file" class="form-control @error('resume') is-invalid @enderror" id="resume" name="resume">
                                    <small class="text-muted">Accepted formats: PDF, DOC, DOCX. Max file size: 10MB.</small>

                                    @if(isset($personalInfo) && $personalInfo->resume)
                                    <div class="mt-2">
                                        <p class="mb-1">Current Resume:</p>
                                        <a href="{{ asset('storage/' . $personalInfo->resume) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                            <i class="uil uil-file-download"></i> Download Resume
                                        </a>
                                    </div>
                                    @endif

                                    @error('resume')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="uil uil-save me-1"></i> Save Information
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
