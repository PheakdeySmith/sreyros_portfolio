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
                            <h4 class="text-white mb-0">Add New Event</h4>
                            <p class="text-white opacity-8 ms-4 mb-0">Create a new calendar event</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="{{ route('admin.calendar') }}" class="btn btn-sm btn-outline-white me-2">
                                <i class="fas fa-calendar me-2"></i> View Calendar
                            </a>
                            <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-white">
                                <i class="fas fa-arrow-left me-2"></i> Back to Events
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Event Details</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.events.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="form-control-label">Event Title <span class="text-danger">*</span></label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location" class="form-control-label">Location</label>
                                    <input class="form-control @error('location') is-invalid @enderror" type="text" id="location" name="location" value="{{ old('location') }}">
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="start_date" class="form-control-label">Start Date & Time <span class="text-danger">*</span></label>
                                    <input class="form-control @error('start_date') is-invalid @enderror" type="datetime-local" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                                    @error('start_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="end_date" class="form-control-label">End Date & Time</label>
                                    <input class="form-control @error('end_date') is-invalid @enderror" type="datetime-local" id="end_date" name="end_date" value="{{ old('end_date') }}">
                                    @error('end_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="color" class="form-control-label">Event Color</label>
                                    <input class="form-control @error('color') is-invalid @enderror" type="color" id="color" name="color" value="{{ old('color', '#4e73df') }}">
                                    @error('color')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url" class="form-control-label">Event URL</label>
                                    <input class="form-control @error('url') is-invalid @enderror" type="url" id="url" name="url" value="{{ old('url') }}" placeholder="https://example.com">
                                    @error('url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto" type="checkbox" id="all_day" name="all_day" value="1" {{ old('all_day') ? 'checked' : '' }}>
                                    <label class="form-check-label ms-3" for="all_day">All Day Event</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-switch ps-0">
                                    <input class="form-check-input ms-auto" type="checkbox" id="is_recurring" name="is_recurring" value="1" {{ old('is_recurring') ? 'checked' : '' }}>
                                    <label class="form-check-label ms-3" for="is_recurring">Recurring Event</label>
                                </div>
                            </div>
                        </div>

                        <div class="row recurring-options" style="display: none;">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="recurrence_pattern" class="form-control-label">Recurrence Pattern</label>
                                    <select class="form-control @error('recurrence_pattern') is-invalid @enderror" id="recurrence_pattern" name="recurrence_pattern">
                                        <option value="daily" {{ old('recurrence_pattern') == 'daily' ? 'selected' : '' }}>Daily</option>
                                        <option value="weekly" {{ old('recurrence_pattern') == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                        <option value="monthly" {{ old('recurrence_pattern') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                        <option value="yearly" {{ old('recurrence_pattern') == 'yearly' ? 'selected' : '' }}>Yearly</option>
                                    </select>
                                    @error('recurrence_pattern')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="recurrence_frequency" class="form-control-label">Repeat Every</label>
                                    <input class="form-control @error('recurrence_frequency') is-invalid @enderror" type="number" id="recurrence_frequency" name="recurrence_frequency" value="{{ old('recurrence_frequency', 1) }}" min="1">
                                    @error('recurrence_frequency')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="recurrence_end_date" class="form-control-label">End Recurrence</label>
                                    <input class="form-control @error('recurrence_end_date') is-invalid @enderror" type="date" id="recurrence_end_date" name="recurrence_end_date" value="{{ old('recurrence_end_date') }}">
                                    @error('recurrence_end_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 text-end">
                                <button type="submit" class="btn bg-gradient-primary">Create Event</button>
                                <button type="reset" class="btn btn-light">Reset</button>
                            </div>
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
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle recurring options
        const isRecurringCheckbox = document.getElementById('is_recurring');
        const recurringOptions = document.querySelector('.recurring-options');

        function toggleRecurringOptions() {
            if (isRecurringCheckbox.checked) {
                recurringOptions.style.display = 'flex';
            } else {
                recurringOptions.style.display = 'none';
            }
        }

        isRecurringCheckbox.addEventListener('change', toggleRecurringOptions);

        // Initialize on page load
        toggleRecurringOptions();

        // Toggle end time field based on all day event
        const allDayCheckbox = document.getElementById('all_day');
        const endDateField = document.getElementById('end_date');

        allDayCheckbox.addEventListener('change', function() {
            if (this.checked) {
                endDateField.value = '';
                endDateField.disabled = true;
            } else {
                endDateField.disabled = false;
            }
        });

        // Initialize all day event toggle
        if (allDayCheckbox.checked) {
            endDateField.value = '';
            endDateField.disabled = true;
        }
    });
</script>
@endpush
