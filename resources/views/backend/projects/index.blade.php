@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Title -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Projects</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                        <i class="uil uil-plus me-1"></i> Add New Project
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

    <!-- Projects List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                    <th>Year</th>
                                    <th>Agency</th>
                                    <th>Featured</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>
                                        @if($project->thumbnail)
                                        <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="rounded" width="60">
                                        @else
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                                <i class="uil uil-image"></i>
                                            </span>
                                        </div>
                                        @endif
                                    </td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->year }}</td>
                                    <td>{{ $project->agency ?? 'N/A' }}</td>
                                    <td>
                                        @if($project->is_featured)
                                        <span class="badge bg-success">Yes</span>
                                        @else
                                        <span class="badge bg-secondary">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-primary">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="uil uil-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">No projects found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
