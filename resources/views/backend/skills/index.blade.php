@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Title -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Skills Management</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.skills.create') }}" class="btn btn-primary rounded-pill">
                        <i class="uil uil-plus me-1"></i> Add Skill
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

    <!-- Skills List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 25%;">Skill Name</th>
                                    <th style="width: 25%;">Proficiency</th>
                                    <th style="width: 15%;">Category</th>
                                    <th style="width: 10%;">Order</th>
                                    <th style="width: 20%;" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($skills as $skill)
                                <tr>
                                    <td>{{ $skill->id }}</td>
                                    <td>
                                        <span class="fw-medium">{{ $skill->name }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1" style="height: 3px; background-color: #eef2f7;">
                                                @php
                                                    $colorClass = 'bg-success';
                                                    if ($skill->proficiency < 40) {
                                                        $colorClass = 'bg-danger';
                                                    } elseif ($skill->proficiency < 70) {
                                                        $colorClass = 'bg-warning';
                                                    }
                                                @endphp
                                                <div class="progress-bar {{ $colorClass }}" role="progressbar"
                                                    style="width: {{ $skill->proficiency }}%;"
                                                    aria-valuenow="{{ $skill->proficiency }}"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="ms-3 fw-medium">{{ $skill->proficiency }}%</span>
                                        </div>
                                    </td>
                                    <td>
                                        @if($skill->category)
                                            <span class="badge bg-soft-primary text-primary">{{ $skill->category }}</span>
                                        @else
                                            <span class="badge bg-light text-muted">Not Categorized</span>
                                        @endif
                                    </td>
                                    <td>{{ $skill->display_order }}</td>
                                    <td class="text-center">
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{ route('admin.skills.edit', $skill) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="uil uil-edit me-1"></i> Edit
                                            </a>
                                            <button type="button" class="btn btn-sm btn-outline-danger delete-skill"
                                                data-id="{{ $skill->id }}"
                                                data-name="{{ $skill->name }}">
                                                <i class="uil uil-trash-alt me-1"></i> Delete
                                            </button>
                                            <form id="delete-form-{{ $skill->id }}" action="{{ route('admin.skills.destroy', $skill) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        <div class="d-flex flex-column align-items-center">
                                            <i class="uil uil-info-circle text-muted" style="font-size: 2rem;"></i>
                                            <p class="mt-2 mb-0">No skills found. Click "Add Skill" to create your first skill.</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $skills->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@endpush

@push('scripts')
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Delete skill confirmation with SweetAlert2
        const deleteButtons = document.querySelectorAll('.delete-skill');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const skillId = this.getAttribute('data-id');
                const skillName = this.getAttribute('data-name');

                Swal.fire({
                    title: 'Are you sure?',
                    html: `You are about to delete the skill <strong>${skillName}</strong>.<br>This action cannot be undone!`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-form-${skillId}`).submit();
                    }
                });
            });
        });
    });
</script>
@endpush
