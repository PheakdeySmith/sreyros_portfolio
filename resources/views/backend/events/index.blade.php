@extends('backend.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <!-- Page Title -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-gradient-primary">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h4 class="text-white mb-0">Events Management</h4>
                            <p class="text-white opacity-8 ms-4 mb-0">Manage your calendar events</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="{{ route('admin.calendar') }}" class="btn btn-sm btn-outline-white me-2">
                                <i class="fas fa-calendar me-2"></i> View Calendar
                            </a>
                            <a href="{{ route('admin.events.create') }}" class="btn btn-sm btn-white">
                                <i class="fas fa-plus me-2"></i> Add Event
                            </a>
                        </div>
                    </div>
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

    <!-- Events List -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>All Events</h6>
                    <p class="text-sm mb-0">
                        <i class="fa fa-calendar text-info" aria-hidden="true"></i>
                        <span class="font-weight-bold ms-1">{{ $events->total() }} total</span> events
                    </p>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date & Time</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Recurring</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($events as $event)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <div class="avatar avatar-sm me-3" style="background-color: {{ $event->color }}">
                                                    <i class="ni ni-calendar-grid-58 text-white opacity-10"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $event->title }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ Str::limit($event->description, 50) }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $event->formatted_start_date }}</p>
                                        @if($event->end_date)
                                        <p class="text-xs text-secondary mb-0">to {{ $event->formatted_end_date }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $event->location ?? 'N/A' }}</p>
                                    </td>
                                    <td>
                                        @if($event->is_recurring)
                                        <span class="badge badge-sm bg-gradient-success">Yes</span>
                                        @else
                                        <span class="badge badge-sm bg-gradient-secondary">No</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <div class="ms-auto">
                                            <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-link text-dark px-3 mb-0">
                                                <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
                                            </a>
                                            <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure you want to delete this event?');">
                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">
                                        <p class="text-sm mb-0">No events found</p>
                                        <a href="{{ route('admin.events.create') }}" class="btn btn-sm bg-gradient-primary mt-3">Add Your First Event</a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
