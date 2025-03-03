@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Title -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Add New Skill</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.skills.index') }}" class="btn btn-secondary">
                        <i class="uil uil-arrow-left me-1"></i> Back to Skills
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.skills.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Skill Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select @error('category') is-invalid @enderror" id="category" name="category">
                                        <option value="">Select Category</option>
                                        <option value="Frontend" {{ old('category') == 'Frontend' ? 'selected' : '' }}>Frontend Development</option>
                                        <option value="Backend" {{ old('category') == 'Backend' ? 'selected' : '' }}>Backend Development</option>
                                        <option value="Database" {{ old('category') == 'Database' ? 'selected' : '' }}>Database</option>
                                        <option value="DevOps" {{ old('category') == 'DevOps' ? 'selected' : '' }}>DevOps</option>
                                        <option value="Design" {{ old('category') == 'Design' ? 'selected' : '' }}>Design</option>
                                        <option value="Other" {{ old('category') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="proficiency" class="form-label">Proficiency (%) <span class="text-danger">*</span></label>
                                    <div class="d-flex align-items-center">
                                        <input type="range" class="form-range" id="proficiency-range" min="0" max="100" step="5" value="{{ old('proficiency', 75) }}" oninput="updateProficiencyValue(this.value)" style="width: 70%;">
                                        <div class="ms-3 d-flex align-items-center">
                                            <input type="number" class="form-control @error('proficiency') is-invalid @enderror" id="proficiency" name="proficiency" value="{{ old('proficiency', 75) }}" min="0" max="100" style="width: 70px;" required>
                                            <span class="ms-2">%</span>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar" id="proficiency-preview" role="progressbar" style="width: {{ old('proficiency', 75) }}%;" aria-valuenow="{{ old('proficiency', 75) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    @error('proficiency')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="display_order" class="form-label">Display Order <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control @error('display_order') is-invalid @enderror" id="display_order" name="display_order" value="{{ old('display_order', $nextOrder ?? 1) }}" min="1" required>
                                    <small class="text-muted">Lower numbers will be displayed first</small>
                                    @error('display_order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="uil uil-save me-1"></i> Save Skill
                            </button>
                            <a href="{{ route('admin.skills.index') }}" class="btn btn-light ms-1">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Update proficiency value and progress bar when range slider changes
    function updateProficiencyValue(val) {
        document.getElementById('proficiency').value = val;
        updateProgressBar(val);
    }

    function updateProgressBar(val) {
        const progressBar = document.getElementById('proficiency-preview');
        progressBar.style.width = val + '%';

        // Change color based on value
        if (val < 40) {
            progressBar.className = 'progress-bar bg-danger';
        } else if (val < 70) {
            progressBar.className = 'progress-bar bg-warning';
        } else {
            progressBar.className = 'progress-bar bg-success';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Update range slider and progress bar when number input changes
        document.getElementById('proficiency').addEventListener('input', function() {
            const val = this.value;
            document.getElementById('proficiency-range').value = val;
            updateProgressBar(val);
        });

        // Initialize progress bar color
        updateProgressBar(document.getElementById('proficiency').value);
    });
</script>
@endpush
