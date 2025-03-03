<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the events.
     */
    public function index()
    {
        $events = Event::orderBy('start_date', 'desc')->paginate(10);
        return view('backend.events.index', compact('events'));
    }

    /**
     * Show the calendar view with events.
     */
    public function calendar()
    {
        $events = Event::all()->map->toCalendarEvent();
        return view('backend.events.calendar', compact('events'));
    }

    /**
     * Show the form for creating a new event.
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created event in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the request
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'start_date' => 'required|date',
                'end_date' => 'nullable|date',
                'location' => 'nullable|string|max:255',
                'color' => 'nullable|string|max:20',
                'all_day' => 'boolean',
                'is_recurring' => 'boolean',
                'recurrence_pattern' => 'nullable|string|required_if:is_recurring,1',
                'recurrence_frequency' => 'nullable|integer|required_if:is_recurring,1',
                'recurrence_end_date' => 'nullable|date|after_or_equal:start_date|required_if:is_recurring,1',
                'url' => 'nullable|url|max:255',
            ]);

            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Validation failed',
                        'errors' => $validator->errors()
                    ], 422);
                }

                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Process the data
            $data = $this->processEventData($request);

            // Create the event
            $event = Event::create($data);

            Log::info('Event created', [
                'event_id' => $event->id,
                'data' => $data
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Event created successfully',
                    'event' => $event->toCalendarEvent()
                ]);
            }

            return redirect()->route('admin.events.index')
                ->with('success', 'Event created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating event', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error creating event: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()
                ->with('error', 'Error creating event: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified event.
     */
    public function show(Event $event)
    {
        return view('backend.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified event.
     */
    public function edit(Event $event)
    {
        return view('backend.events.edit', compact('event'));
    }

    /**
     * Update the specified event in storage.
     */
    public function update(Request $request, Event $event)
    {
        try {
            // Log the incoming request
            Log::info('Event update request', [
                'event_id' => $event->id,
                'request_data' => $request->all(),
                'request_method' => $request->method()
            ]);

            // Validate the request
            $validator = Validator::make($request->all(), [
                'title' => 'sometimes|required|string|max:255',
                'description' => 'nullable|string',
                'start_date' => 'sometimes|required',
                'end_date' => 'nullable',
                'location' => 'nullable|string|max:255',
                'color' => 'nullable|string|max:20',
                'all_day' => 'boolean',
                'is_recurring' => 'boolean',
                'recurrence_pattern' => 'nullable|string|required_if:is_recurring,1',
                'recurrence_frequency' => 'nullable|integer|required_if:is_recurring,1',
                'recurrence_end_date' => 'nullable|date|after_or_equal:start_date|required_if:is_recurring,1',
                'url' => 'nullable|url|max:255',
            ]);

            if ($validator->fails()) {
                Log::warning('Event update validation failed', [
                    'event_id' => $event->id,
                    'errors' => $validator->errors()->toArray()
                ]);

                if ($request->ajax()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Validation failed',
                        'errors' => $validator->errors()
                    ], 422);
                }

                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Process the data
            $data = $this->processEventData($request);

            // Update the event
            $event->update($data);

            Log::info('Event updated', [
                'event_id' => $event->id,
                'data' => $data
            ]);

            if ($request->ajax()) {
                // Get the fresh event data
                $event->refresh();

                return response()->json([
                    'success' => true,
                    'message' => 'Event updated successfully',
                    'event' => $event->toCalendarEvent()
                ]);
            }

            return redirect()->route('admin.events.index')
                ->with('success', 'Event updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating event', [
                'event_id' => $event->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error updating event: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->back()
                ->with('error', 'Error updating event: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified event from storage.
     */
    public function destroy(Event $event)
    {
        try {
            $event->delete();

            Log::info('Event deleted', [
                'event_id' => $event->id
            ]);

            if (request()->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Event deleted successfully'
                ]);
            }

            return redirect()->route('admin.events.index')
                ->with('success', 'Event deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting event', [
                'event_id' => $event->id,
                'error' => $e->getMessage()
            ]);

            if (request()->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error deleting event: ' . $e->getMessage()
                ], 500);
            }

            return redirect()->route('admin.events.index')
                ->with('error', 'Error deleting event: ' . $e->getMessage());
        }
    }

    /**
     * Get events as JSON for AJAX requests.
     */
    public function getEvents(Request $request)
    {
        try {
            $start = $request->input('start');
            $end = $request->input('end');

            $events = Event::when($start, function ($query, $start) {
                    return $query->where('start_date', '>=', $start);
                })
                ->when($end, function ($query, $end) {
                    return $query->where('start_date', '<=', $end);
                })
                ->get()
                ->map->toCalendarEvent();

            return response()->json($events);
        } catch (\Exception $e) {
            Log::error('Error fetching events', [
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Error fetching events: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Process event data from request.
     *
     * @param Request $request
     * @return array
     */
    private function processEventData(Request $request)
    {
        // Create a copy of the request data
        $data = $request->except(['_token', '_method']);

        // Process start date
        if (isset($data['start_date'])) {
            $startDate = Carbon::parse($data['start_date']);
            $data['start_date'] = $startDate->format('Y-m-d H:i:s');

            Log::info('Processed start date', [
                'original' => $request->input('start_date'),
                'processed' => $data['start_date']
            ]);
        }

        // Process end date for all-day events
        if (isset($data['end_date']) && $request->boolean('all_day')) {
            $endDate = Carbon::parse($data['end_date']);

            // If the end date is at midnight (00:00:00), it means it's from FullCalendar
            // which uses exclusive end dates for all-day events
            if ($endDate->format('H:i:s') === '00:00:00') {
                // Subtract one day to get the actual end day, then set to 23:59:00
                $endDate->subDay()->setTime(23, 59, 0);
            } else if ($endDate->format('H:i:s') !== '23:59:00') {
                // If it's not already at 23:59:00, set it
                $endDate->setTime(23, 59, 0);
            }

            $data['end_date'] = $endDate->format('Y-m-d H:i:s');

            Log::info('Processed end date for all-day event', [
                'original' => $request->input('end_date'),
                'processed' => $data['end_date']
            ]);
        }

        return $data;
    }
}
