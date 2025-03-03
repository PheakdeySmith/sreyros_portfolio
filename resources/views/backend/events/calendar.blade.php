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
                            <h4 class="text-white mb-0">Calendar Events</h4>
                            <p class="text-white opacity-8 ms-4 mb-0">Manage your schedule and important dates</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-outline-white">
                                <i class="fas fa-list me-2"></i>List View
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar Card -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="calendar-navigation" class="d-flex align-items-center">
                                <button id="prev-btn" class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button id="next-btn" class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                                <button id="today-btn" class="btn btn-sm btn-primary me-3">Today</button>
                                <h5 id="calendar-title" class="mb-0 font-weight-bold"></h5>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <div class="btn-group" role="group">
                                <button id="month-view" class="btn btn-sm btn-outline-primary active">Month</button>
                                <button id="week-view" class="btn btn-sm btn-outline-primary">Week</button>
                                <button id="day-view" class="btn btn-sm btn-outline-primary">Day</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    .fc-event {
        cursor: pointer;
        border-radius: 4px;
        padding: 3px;
        font-size: 0.85rem;
        border: none;
    }
    .fc-event:hover {
        opacity: 0.9;
        transform: translateY(-1px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.2s;
    }
    .fc-daygrid-day:hover {
        background-color: rgba(0, 0, 0, 0.02);
        cursor: pointer;
    }
    .fc-header-toolbar {
        display: none !important;
    }
    .fc-view-harness {
        min-height: 600px;
    }
    .fc-day-today {
        background-color: rgba(94, 114, 228, 0.1) !important;
    }
    .fc-event-time {
        font-weight: 600;
    }
    .fc-event-title {
        font-weight: 500;
    }
    .fc-list-day-cushion {
        background-color: #f8f9fa !important;
    }
    .swal2-container {
        z-index: 10000;
    }
    .btn-group .btn.active {
        background-color: #5e72e4;
        color: white;
    }
    #calendar-title {
        font-size: 1.25rem;
        color: #344767;
    }
    .form-color-picker {
        height: 38px;
    }
    .event-badge {
        width: 10px;
        height: 10px;
        display: inline-block;
        border-radius: 50%;
        margin-right: 5px;
    }
    /* Add spacing between SweetAlert buttons */
    .swal2-actions {
        gap: 10px;
    }
    .swal2-styled.swal2-confirm,
    .swal2-styled.swal2-deny,
    .swal2-styled.swal2-cancel {
        margin: 0 !important;
    }
    /* Colored toast styles */
    .colored-toast.swal2-icon-success {
        background-color: #a5dc86 !important;
    }
    .colored-toast.swal2-icon-error {
        background-color: #f27474 !important;
    }
    .colored-toast.swal2-icon-warning {
        background-color: #f8bb86 !important;
    }
    .colored-toast.swal2-icon-info {
        background-color: #3fc3ee !important;
    }
    .colored-toast.swal2-icon-question {
        background-color: #87adbd !important;
    }
    .colored-toast .swal2-title {
        color: white;
    }
    .colored-toast .swal2-close {
        color: white;
    }
    .colored-toast .swal2-html-container {
        color: white;
    }
</style>

<script>
    // Wait for the DOM to be fully loaded
    $(document).ready(function() {
        // Set up CSRF token for all AJAX requests
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Configure jQuery AJAX to include CSRF token by default
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        // Initialize FullCalendar
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            themeSystem: 'bootstrap5',
            height: 'auto',
            navLinks: true,
            editable: true,
            selectable: true,
            selectMirror: true,
            dayMaxEvents: true,
            timeZone: 'local',

            // Load events directly from the server
            events: {
                url: "{{ route('admin.get-events') }}",
                method: 'GET',
                failure: function(error) {
                    console.error('There was an error while fetching events!', error);
                    // Show error message
                    Swal.fire({
                        title: 'Error!',
                        text: 'Could not load events from the server.',
                        icon: 'error',
                        customClass: {
                            confirmButton: 'btn btn-primary',
                            actions: 'swal-buttons-spacing'
                        },
                        buttonsStyling: false
                    });
                },
                success: function(events) {
                    console.log('Events loaded successfully:', events);
                }
            },

            // Create event on date selection
            select: function(info) {
                console.log('Date selection:', info); // Debug log

                // Prepare event data for the modal
                const eventData = {
                    // Use the native Date objects which are already in local timezone
                    start: info.start,
                    end: info.end,
                    allDay: info.allDay
                };

                showEventModal(eventData);
            },

            // Show event details on click
            eventClick: function(info) {
                // Prevent default URL navigation
                info.jsEvent.preventDefault();

                console.log('Event clicked:', info.event); // Debug log
                console.log('Event ID:', info.event.id); // Log the event ID specifically

                const event = info.event;

                Swal.fire({
                    title: event.title,
                    html: createEventDetailsHtml(event),
                    icon: 'info',
                    showCancelButton: true,
                    showDenyButton: true,
                    confirmButtonText: 'Edit',
                    denyButtonText: 'Delete',
                    cancelButtonText: 'Close',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        denyButton: 'btn btn-danger',
                        cancelButton: 'btn btn-secondary',
                        actions: 'swal-buttons-spacing'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Edit event - create a proper event data object with ID
                        const eventData = {
                            id: event.id,
                            title: event.title,
                            start: event.start,
                            end: event.end,
                            allDay: event.allDay,
                            backgroundColor: event.backgroundColor,
                            extendedProps: event.extendedProps
                        };
                        console.log('Passing event data to modal with ID:', eventData.id);
                        showEventModal(eventData);
                    } else if (result.isDenied) {
                        // Delete event
                        deleteEvent(event.id);
                    }
                });
            },

            // Handle event drag
            eventDrop: function(info) {
                console.log('Event dropped:', info.event.title);

                // Check if we have the necessary data
                if (!info.event || !info.event.id) {
                    console.error('Event data is missing or invalid');
                    return;
                }

                // Log available data
                console.log('Event data:', {
                    id: info.event.id,
                    title: info.event.title,
                    start: info.event.start,
                    end: info.event.end,
                    allDay: info.event.allDay
                });

                // Instead of relying on oldEvent, we'll just use the current event data
                // The server will handle the update based on the new dates

                // Update event dates without passing originalEvent
                updateEventDates(info.event);
            },

            // Handle event resize
            eventResize: function(info) {
                console.log('Event resized:', info.event.title);

                // Check if we have the necessary data
                if (!info.event || !info.event.id) {
                    console.error('Event data is missing or invalid');
                    return;
                }

                // Log available data
                console.log('Event data:', {
                    id: info.event.id,
                    title: info.event.title,
                    start: info.event.start,
                    end: info.event.end,
                    allDay: info.event.allDay
                });

                // Instead of relying on prevEvent, we'll just use the current event data
                // The server will handle the update based on the new dates

                // Update event dates without passing originalEvent
                updateEventDates(info.event);
            },

            // Event rendering
            eventDidMount: function(info) {
                // Add tooltip
                try {
                    const tooltip = new bootstrap.Tooltip(info.el, {
                        title: info.event.title,
                        placement: 'top',
                        trigger: 'hover',
                        container: 'body'
                    });
                } catch (error) {
                    console.error('Error creating tooltip:', error);
                }
            }
        });

        // Initialize the calendar
        calendar.render();

        // Set up custom navigation buttons
        document.getElementById('prev-btn').addEventListener('click', function() {
            calendar.prev();
            updateCalendarTitle();
        });

        document.getElementById('next-btn').addEventListener('click', function() {
            calendar.next();
            updateCalendarTitle();
        });

        document.getElementById('today-btn').addEventListener('click', function() {
            calendar.today();
            updateCalendarTitle();
        });

        // Set up view buttons
        document.getElementById('month-view').addEventListener('click', function() {
            calendar.changeView('dayGridMonth');
            updateViewButtons(this);
        });

        document.getElementById('week-view').addEventListener('click', function() {
            calendar.changeView('timeGridWeek');
            updateViewButtons(this);
        });

        document.getElementById('day-view').addEventListener('click', function() {
            calendar.changeView('timeGridDay');
            updateViewButtons(this);
        });

        // Update calendar title on initial load
        updateCalendarTitle();

        // Function to update calendar title
        function updateCalendarTitle() {
            const title = calendar.view.title;
            document.getElementById('calendar-title').textContent = title;
        }

        // Function to update view buttons
        function updateViewButtons(activeButton) {
            document.querySelectorAll('.btn-group .btn').forEach(btn => {
                btn.classList.remove('active');
            });
            activeButton.classList.add('active');
        }

        // Function to create HTML for event details
        function createEventDetailsHtml(event) {
            console.log('Creating event details HTML for:', event);
            console.log('Event dates:', {
                start: event.start,
                end: event.end,
                allDay: event.allDay,
                extendedProps: event.extendedProps
            });

            // Get the dates
            const startDate = event.start;
            const endDate = event.end;
            const isAllDay = event.allDay;

            // Format the date display
            let dateHtml = '';

            if (isAllDay) {
                // All-day event
                if (endDate) {
                    // Check if it's a multi-day event
                    const start = new Date(startDate);
                    const end = new Date(endDate);

                    // For all-day events, FullCalendar uses exclusive end dates
                    // So we need to subtract one day from the end date for display
                    const displayEndDate = new Date(end);
                    displayEndDate.setDate(displayEndDate.getDate() - 1);

                    // Check if start and end dates are the same day
                    const sameDay = start.toDateString() === displayEndDate.toDateString();

                    if (sameDay) {
                        // Single day all-day event
                        dateHtml = `<strong>Date:</strong> ${formatDate(startDate)} (All day)`;
                    } else {
                        // Multi-day all-day event
                        dateHtml = `<strong>Date:</strong> ${formatDate(startDate)} - ${formatDate(displayEndDate)} (All day)`;
                    }

                    console.log('All-day event date display:', {
                        start: formatDate(startDate),
                        end: formatDate(displayEndDate),
                        sameDay: sameDay
                    });
                } else {
                    // Single day all-day event without end date
                    dateHtml = `<strong>Date:</strong> ${formatDate(startDate)} (All day)`;
                }
            } else {
                // Regular event with time
                if (endDate) {
                    // Check if it's a multi-day event
                    const start = new Date(startDate);
                    const end = new Date(endDate);
                    const sameDay = start.toDateString() === end.toDateString();

                    if (sameDay) {
                        // Same day event with start and end time
                        dateHtml = `<strong>Date & Time:</strong> ${formatDate(startDate)}, ${formatTime(startDate)} - ${formatTime(endDate)}`;
                    } else {
                        // Multi-day event with times
                        dateHtml = `<strong>Date & Time:</strong> ${formatDateTime(startDate)} - ${formatDateTime(endDate)}`;
                    }
                } else {
                    // No end time specified
                    dateHtml = `<strong>Date & Time:</strong> ${formatDateTime(startDate)}`;
                }
            }

            // Build the HTML
            let html = `
                <div class="event-details">
                    <div class="event-info">
                        <p class="mb-2">${dateHtml}</p>
            `;

            // Add location if available
            if (event.extendedProps && event.extendedProps.location) {
                html += `<p class="mb-2"><strong>Location:</strong> ${event.extendedProps.location}</p>`;
            }

            // Add description if available
            if (event.extendedProps && event.extendedProps.description) {
                html += `<p class="mb-2"><strong>Description:</strong> ${event.extendedProps.description}</p>`;
            }

            // Add URL if available
            if (event.extendedProps && event.extendedProps.url) {
                html += `<p class="mb-2"><strong>URL:</strong> <a href="${event.extendedProps.url}" target="_blank">${event.extendedProps.url}</a></p>`;
            }

            html += `
                    </div>
                </div>
            `;

            return html;
        }

        // Function to format date
        function formatDate(date) {
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            return new Date(date).toLocaleDateString('en-US', options);
        }

        // Function to format date and time
        function formatDateTime(date) {
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
            return new Date(date).toLocaleDateString('en-US', options);
        }

        // Function to format time only
        function formatTime(date) {
            const options = { hour: '2-digit', minute: '2-digit' };
            return new Date(date).toLocaleTimeString('en-US', options);
        }

        // Function to format date for server submission
        function formatDateForServer(date) {
            if (!date) return null;
            const d = new Date(date);

            // Get the date components
            const year = d.getFullYear();
            const month = String(d.getMonth() + 1).padStart(2, '0');
            const day = String(d.getDate()).padStart(2, '0');
            const hours = String(d.getHours()).padStart(2, '0');
            const minutes = String(d.getMinutes()).padStart(2, '0');
            const seconds = String(d.getSeconds()).padStart(2, '0');

            // Format as YYYY-MM-DD HH:MM:SS
            const formatted = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

            console.log(`Formatting date: ${date} -> ${formatted}`);
            return formatted;
        }

        // Function to show event modal
        function showEventModal(eventData = null) {
            console.log('Event data received:', eventData); // Debug log

            // Set default values or use existing event data
            const isNewEvent = !eventData || !eventData.id;

            // Create a copy of the event data to avoid modifying the original
            const event = { ...eventData };

            // Ensure we have the event ID if it's an existing event
            if (!isNewEvent && event) {
                console.log('Editing existing event with ID:', event.id);
                // Store the ID in a variable that will be accessible in the form submission
                const eventId = event.id;
                // Make sure the ID is attached to the event object
                event.id = eventId;
            }

            // Handle different date formats (Date object, ISO string, or FullCalendar event)
            let startDate, endDate;

            // Process start date
            if (event.start instanceof Date) {
                startDate = event.start;
            } else if (typeof event.start === 'string') {
                startDate = new Date(event.start);
            } else if (event.start && typeof event.start.toISOString === 'function') {
                startDate = event.start;
            } else {
                startDate = new Date();
            }

            console.log('Start date processed:', startDate); // Debug log

            // Process end date
            if (event.end instanceof Date) {
                endDate = event.end;
            } else if (typeof event.end === 'string') {
                endDate = new Date(event.end);
            } else if (event.end && typeof event.end.toISOString === 'function') {
                endDate = event.end;
            } else if (event.allDay) {
                // For all-day events with no end date, set end date to same day
                endDate = new Date(startDate);
                endDate.setHours(23, 59, 59);
            } else {
                // Default to start date + 1 hour for regular events
                endDate = new Date(startDate);
                endDate.setHours(endDate.getHours() + 1);
            }

            console.log('End date processed:', endDate); // Debug log

            // For all-day events, adjust end date if needed
            if (event.allDay && endDate) {
                // For all-day events, FullCalendar sets the end date to the next day at 00:00
                // If this is the case, adjust it to 23:59:59 of the previous day
                if (endDate.getHours() === 0 && endDate.getMinutes() === 0 && endDate.getSeconds() === 0) {
                    // Set to 23:59:59 of the previous day
                    const adjustedEndDate = new Date(endDate);
                    adjustedEndDate.setDate(adjustedEndDate.getDate() - 1);
                    adjustedEndDate.setHours(23, 59, 59);

                    console.log('Original end date:', endDate);
                    console.log('Adjusted end date for all-day event:', adjustedEndDate);

                    endDate = adjustedEndDate;
                }
            }

            // Format dates for input fields
            const formatForInput = (date) => {
                if (!date) return '';
                try {
                    // Ensure we're working with a Date object
                    const dateObj = date instanceof Date ? date : new Date(date);

                    // Format as YYYY-MM-DDTHH:MM in local timezone instead of UTC
                    const year = dateObj.getFullYear();
                    const month = String(dateObj.getMonth() + 1).padStart(2, '0');
                    const day = String(dateObj.getDate()).padStart(2, '0');
                    const hours = String(dateObj.getHours()).padStart(2, '0');
                    const minutes = String(dateObj.getMinutes()).padStart(2, '0');

                    return `${year}-${month}-${day}T${hours}:${minutes}`;
                } catch (e) {
                    console.error('Error formatting date:', e);
                    return '';
                }
            };

            const startDateFormatted = formatForInput(startDate);
            const endDateFormatted = formatForInput(endDate);

            console.log('Formatted dates for input:', {
                startDateFormatted,
                endDateFormatted,
                allDay: event.allDay
            });

            // Create form HTML
            let formHtml = `
                <form id="event-form" class="text-start">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" required value="${event.title || ''}">
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="start_date" class="form-label">Start <span class="text-danger">*</span></label>
                            <input type="datetime-local" class="form-control" id="start_date" name="start_date" required value="${startDateFormatted}">
                        </div>
                        <div class="col-md-6">
                            <label for="end_date" class="form-label">End</label>
                            <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="${endDateFormatted}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="${event.extendedProps?.location || ''}">
                        </div>
                        <div class="col-md-6">
                            <label for="color" class="form-label">Color</label>
                            <input type="color" class="form-control form-color-picker" id="color" name="color" value="${event.backgroundColor || '#4e73df'}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">${event.extendedProps?.description || ''}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">URL</label>
                        <input type="url" class="form-control" id="url" name="url" value="${event.extendedProps?.url || ''}">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="all_day" name="all_day" ${event.allDay ? 'checked' : ''}>
                        <label class="form-check-label" for="all_day">All Day Event</label>
                    </div>
                </form>
            `;

            // Show SweetAlert modal
            Swal.fire({
                title: isNewEvent ? 'Add New Event' : 'Edit Event',
                html: formHtml,
                showCancelButton: true,
                confirmButtonText: isNewEvent ? 'Create' : 'Update',
                cancelButtonText: 'Cancel',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-secondary',
                    popup: 'swal-wide',
                    actions: 'swal-buttons-spacing'
                },
                buttonsStyling: false,
                didOpen: () => {
                    // Toggle end date field based on all day event
                    const allDayCheckbox = document.getElementById('all_day');
                    const endDateField = document.getElementById('end_date');
                    const startDateField = document.getElementById('start_date');

                    allDayCheckbox.addEventListener('change', function() {
                        if (this.checked) {
                            // If all-day is checked, set end date to same day as start at 23:59
                            const startDate = new Date(startDateField.value);
                            const endDate = new Date(startDate);
                            endDate.setHours(23, 59, 59);

                            // Format for input
                            endDateField.value = formatForInput(endDate);
                            endDateField.disabled = false;
                        } else {
                            // If all-day is unchecked, set end date to start date + 1 hour
                            const startDate = new Date(startDateField.value);
                            const endDate = new Date(startDate);
                            endDate.setHours(endDate.getHours() + 1);

                            // Format for input
                            endDateField.value = formatForInput(endDate);
                            endDateField.disabled = false;
                        }
                    });

                    // Initialize all day event toggle
                    if (allDayCheckbox.checked) {
                        // No need to disable end date field, just ensure it has the right value
                        const startDate = new Date(startDateField.value);
                        const endDate = new Date(startDate);
                        endDate.setHours(23, 59, 59);

                        // Format for input
                        if (!endDateField.value) {
                            endDateField.value = formatForInput(endDate);
                        }
                    }

                    // Also update end date when start date changes
                    startDateField.addEventListener('change', function() {
                        if (allDayCheckbox.checked) {
                            // If all-day is checked, set end date to same day as start at 23:59
                            const startDate = new Date(this.value);
                            const endDate = new Date(startDate);
                            endDate.setHours(23, 59, 59);

                            // Format for input
                            endDateField.value = formatForInput(endDate);
                        } else {
                            // If start date is after end date, update end date
                            const startDate = new Date(this.value);
                            const endDate = endDateField.value ? new Date(endDateField.value) : null;

                            if (!endDate || startDate >= endDate) {
                                const newEndDate = new Date(startDate);
                                newEndDate.setHours(newEndDate.getHours() + 1);

                                // Format for input
                                endDateField.value = formatForInput(newEndDate);
                            }
                        }
                    });
                },
                preConfirm: () => {
                    // Validate form
                    const form = document.getElementById('event-form');
                    if (!form.checkValidity()) {
                        form.reportValidity();
                        return false;
                    }

                    // Get form values
                    const title = document.getElementById('title').value;
                    const startDateInput = document.getElementById('start_date').value;
                    const endDateInput = document.getElementById('end_date').value || null;
                    const location = document.getElementById('location').value || null;
                    const color = document.getElementById('color').value;
                    const description = document.getElementById('description').value || null;
                    const url = document.getElementById('url').value || null;
                    const allDay = document.getElementById('all_day').checked ? 1 : 0;

                    // Format dates in local timezone to avoid UTC conversion issues
                    const formatDateForServer = (dateStr) => {
                        if (!dateStr) return null;
                        const d = new Date(dateStr);

                        // Get the date components
                        const year = d.getFullYear();
                        const month = String(d.getMonth() + 1).padStart(2, '0');
                        const day = String(d.getDate()).padStart(2, '0');
                        const hours = String(d.getHours()).padStart(2, '0');
                        const minutes = String(d.getMinutes()).padStart(2, '0');
                        const seconds = String(d.getSeconds()).padStart(2, '0');

                        // Format as YYYY-MM-DD HH:MM:SS
                        const formatted = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

                        console.log(`Formatting date: ${dateStr} -> ${formatted}`);
                        return formatted;
                    };

                    // Format dates for server
                    const startDate = formatDateForServer(startDateInput);

                    // Special handling for end date of all-day events
                    let endDate = null;
                    if (endDateInput) {
                        if (allDay) {
                            // For all-day events, ensure the end date is set to 23:59:00
                            const endDateObj = new Date(endDateInput);

                            // If it's already at 23:59, keep it as is
                            if (endDateObj.getHours() === 23 && endDateObj.getMinutes() === 59) {
                                endDate = formatDateForServer(endDateInput);
                            } else {
                                // For multi-day events, we need to keep the actual end day
                                // Set to 23:59:00 of the same day
                                endDateObj.setHours(23, 59, 0);
                                endDate = formatDateForServer(endDateObj);
                            }

                            console.log('Adjusted all-day event end date:', endDate);
                        } else {
                            // Regular event with time
                            endDate = formatDateForServer(endDateInput);
                        }
                    }

                    console.log('Form submission dates:', {
                        startInput: startDateInput,
                        endInput: endDateInput,
                        formattedStart: startDate,
                        formattedEnd: endDate,
                        allDay: allDay
                    });

                    const formData = {
                        title,
                        start_date: startDate,
                        end_date: endDate,
                        location,
                        color,
                        description,
                        url,
                        all_day: allDay
                    };

                    // Add event ID if editing
                    if (!isNewEvent) {
                        // Make sure we're getting the ID directly from the event object
                        if (event && event.id) {
                            formData.id = event.id;
                            console.log('Adding event ID to form data:', event.id);
                        } else {
                            console.error('Event ID is missing for update operation');
                        }
                    }

                    return formData;
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Save event
                    saveEvent(result.value, isNewEvent);
                }
            });
        }

        // Function to save event
        function saveEvent(formData, isNewEvent) {
            console.log('Saving event with data:', formData);

            // Show loading
            Swal.fire({
                title: 'Saving...',
                html: 'Please wait while we save your event.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Prepare request
            const url = isNewEvent
                ? "{{ route('admin.events.store') }}"
                : "{{ route('admin.events.update', '') }}/" + (formData.id || '');

            // Check if we have a valid ID for updates
            if (!isNewEvent && !formData.id) {
                console.error('Missing event ID for update operation');
                Swal.fire({
                    title: 'Error!',
                    text: 'Unable to update event: Missing event ID',
                    icon: 'error',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        actions: 'swal-buttons-spacing'
                    },
                    buttonsStyling: false
                });
                return;
            }

            // Add method and CSRF token
            formData._method = isNewEvent ? 'POST' : 'PUT';
            formData._token = "{{ csrf_token() }}";

            // Use jQuery AJAX instead of fetch
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    console.log('Server response:', response);

                    if (response.success) {
                        // Show success message
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            customClass: {
                                confirmButton: 'btn btn-primary',
                                actions: 'swal-buttons-spacing'
                            },
                            buttonsStyling: false
                        });

                        // If we have the event data in the response, update the calendar
                        if (response.event) {
                            console.log('Adding event directly to calendar:', response.event);

                            // For new events, we'll just refresh the calendar instead of adding directly
                            // This prevents duplicate events from appearing
                            calendar.refetchEvents();
                        }
                    } else {
                        // Show error message
                        Swal.fire({
                            title: 'Error!',
                            text: response.message || 'An error occurred while saving the event.',
                            icon: 'error',
                            customClass: {
                                confirmButton: 'btn btn-primary',
                                actions: 'swal-buttons-spacing'
                            },
                            buttonsStyling: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    console.log('Response:', xhr.responseText);

                    // Show error message
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred while saving the event.',
                        icon: 'error',
                        customClass: {
                            confirmButton: 'btn btn-primary',
                            actions: 'swal-buttons-spacing'
                        },
                        buttonsStyling: false
                    });
                }
            });
        }

        // Function to delete event
        function deleteEvent(eventId) {
            // Confirm deletion
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-secondary',
                    actions: 'swal-buttons-spacing'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading
                    Swal.fire({
                        title: 'Deleting...',
                        html: 'Please wait while we delete the event.',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Prepare data
                    const data = {
                        _token: "{{ csrf_token() }}",
                        _method: 'DELETE'
                    };

                    // Use jQuery AJAX instead of fetch
                    $.ajax({
                        url: "{{ route('admin.events.destroy', '') }}/" + eventId,
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                // Show success message
                                Swal.fire({
                                    title: 'Deleted!',
                                    text: response.message,
                                    icon: 'success',
                                    customClass: {
                                        confirmButton: 'btn btn-primary',
                                        actions: 'swal-buttons-spacing'
                                    },
                                    buttonsStyling: false
                                }).then(() => {
                                    // Refresh calendar
                                    calendar.refetchEvents();
                                });
                            } else {
                                // Show error message
                                Swal.fire({
                                    title: 'Error!',
                                    text: response.message || 'An error occurred while deleting the event.',
                                    icon: 'error',
                                    customClass: {
                                        confirmButton: 'btn btn-primary',
                                        actions: 'swal-buttons-spacing'
                                    },
                                    buttonsStyling: false
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error:', status, error);
                            console.log('Response:', xhr.responseText);

                            // Show error message
                            Swal.fire({
                                title: 'Error!',
                                text: 'An error occurred while deleting the event.',
                                icon: 'error',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                    actions: 'swal-buttons-spacing'
                                },
                                buttonsStyling: false
                            });
                        }
                    });
                }
            });
        }

        // Function to update event dates after resize or drag
        function updateEventDates(event) {
            // Check if event is valid
            if (!event || !event.id) {
                console.error('Invalid event object:', event);
                return;
            }

            console.log('Updating event dates:', {
                id: event.id,
                start: event.start,
                end: event.end,
                allDay: event.allDay
            });

            // Special handling for end date of all-day events
            let endDate = event.end;
            if (event.allDay && event.end) {
                // For all-day events, FullCalendar uses exclusive end dates (the day after the last day)
                // We need to adjust it to be 23:59:00 of the previous day
                const endDateObj = new Date(event.end);

                // Check if it's midnight (00:00:00)
                if (endDateObj.getHours() === 0 && endDateObj.getMinutes() === 0) {
                    // Subtract one day and set to 23:59:00
                    const adjustedEndDate = new Date(endDateObj);
                    adjustedEndDate.setDate(adjustedEndDate.getDate() - 1);
                    adjustedEndDate.setHours(23, 59, 0);

                    console.log('Original end date:', endDateObj);
                    console.log('Adjusted end date for server:', adjustedEndDate);

                    endDate = adjustedEndDate;
                }
            }

            // Format dates in local timezone to avoid UTC conversion issues
            const formatDateForServer = (date) => {
                if (!date) return null;
                const d = new Date(date);

                // Get the date components
                const year = d.getFullYear();
                const month = String(d.getMonth() + 1).padStart(2, '0');
                const day = String(d.getDate()).padStart(2, '0');
                const hours = String(d.getHours()).padStart(2, '0');
                const minutes = String(d.getMinutes()).padStart(2, '0');
                const seconds = String(d.getSeconds()).padStart(2, '0');

                // Format as YYYY-MM-DD HH:MM:SS
                const formatted = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;

                console.log(`Formatting date: ${date} -> ${formatted}`);
                return formatted;
            };

            // Prepare data for AJAX request
            const data = {
                _token: "{{ csrf_token() }}",
                _method: 'PUT',
                id: event.id,
                start_date: formatDateForServer(event.start),
                end_date: endDate ? formatDateForServer(endDate) : null,
                all_day: event.allDay ? 1 : 0
            };

            // For debugging - log the actual data being sent
            console.log('Sending to server:', data);

            // Show loading toast
            const loadingToast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            loadingToast.fire({
                icon: 'info',
                title: 'Updating event...'
            });

            // Send AJAX request to update event
            $.ajax({
                url: "{{ route('admin.events.update', '') }}/" + event.id,
                type: 'POST',
                data: data,
                dataType: 'json',
                success: function(response) {
                    console.log('Server response:', response);

                    if (response.success) {
                        // Show success toast
                        Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        }).fire({
                            icon: 'success',
                            title: 'Event updated successfully'
                        });

                        // Refresh the calendar to ensure we have the latest data
                        calendar.refetchEvents();
                    } else {
                        // Show error toast
                        Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        }).fire({
                            icon: 'error',
                            title: response.message || 'Error updating event'
                        });

                        // Just refresh the calendar to revert to the server state
                        calendar.refetchEvents();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    console.log('Response:', xhr.responseText);

                    // Show error toast
                    Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    }).fire({
                        icon: 'error',
                        title: 'Error updating event'
                    });

                    // Just refresh the calendar to revert to the server state
                    calendar.refetchEvents();
                }
            });
        }
    });
</script>
@endpush
