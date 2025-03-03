<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'color',
        'all_day',
        'is_recurring',
        'recurrence_pattern',
        'recurrence_frequency',
        'recurrence_end_date',
        'url',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'recurrence_end_date' => 'date',
        'all_day' => 'boolean',
        'is_recurring' => 'boolean',
    ];

    /**
     * Handle date mutators to ensure proper timezone handling
     */
    public function setStartDateAttribute($value)
    {
        Log::info('Setting start_date', ['value' => $value]);
        $this->attributes['start_date'] = $value;
    }

    public function setEndDateAttribute($value)
    {
        Log::info('Setting end_date', ['value' => $value]);
        $this->attributes['end_date'] = $value;
    }

    /**
     * Format the event for calendar display
     *
     * @return array
     */
    public function toCalendarEvent(): array
    {
        // Log the raw event data for debugging
        Log::info('Raw event data for calendar conversion', [
            'id' => $this->id,
            'title' => $this->title,
            'start_date' => $this->start_date ? $this->start_date->format('Y-m-d H:i:s') : null,
            'end_date' => $this->end_date ? $this->end_date->format('Y-m-d H:i:s') : null,
            'all_day' => $this->all_day
        ]);

        // Format start date
        $startDate = $this->start_date ? $this->start_date->format('Y-m-d H:i:s') : null;

        // Handle end date based on whether it's an all-day event
        $endDate = null;
        if ($this->end_date) {
            if ($this->all_day) {
                // For all-day events, FullCalendar expects exclusive end dates
                // If the end date is 23:59:00, we need to add 1 minute to make it the next day at 00:00
                if ($this->end_date->format('H:i:s') === '23:59:00') {
                    // Create a new Carbon instance to avoid modifying the original
                    $adjustedEndDate = clone $this->end_date;
                    $adjustedEndDate->addMinutes(1);
                    $endDate = $adjustedEndDate->format('Y-m-d H:i:s');

                    Log::info('Adjusted end date for FullCalendar (all-day event)', [
                        'original' => $this->end_date->format('Y-m-d H:i:s'),
                        'adjusted' => $endDate
                    ]);
                } else {
                    // If it's not 23:59:00, use as is
                    $endDate = $this->end_date->format('Y-m-d H:i:s');
                }
            } else {
                // Regular event with time
                $endDate = $this->end_date->format('Y-m-d H:i:s');
            }
        }

        // Log the formatted event data
        Log::info('Formatted event data for calendar', [
            'id' => $this->id,
            'title' => $this->title,
            'start' => $startDate,
            'end' => $endDate,
            'allDay' => $this->all_day
        ]);

        // Return the event data in FullCalendar format
        return [
            'id' => $this->id,
            'title' => $this->title,
            'start' => $startDate,
            'end' => $endDate,
            'allDay' => $this->all_day,
            'backgroundColor' => $this->color ?? '#4e73df',
            'borderColor' => $this->color ?? '#4e73df',
            'textColor' => '#ffffff',
            'extendedProps' => [
                'description' => $this->description,
                'location' => $this->location,
                'url' => $this->url,
                'rawStartDate' => $this->start_date ? $this->start_date->format('Y-m-d H:i:s') : null,
                'rawEndDate' => $this->end_date ? $this->end_date->format('Y-m-d H:i:s') : null,
            ]
        ];
    }

    /**
     * Get formatted start date
     *
     * @return string
     */
    public function getFormattedStartDateAttribute(): string
    {
        return $this->start_date->format('M d, Y h:i A');
    }

    /**
     * Get formatted end date
     *
     * @return string|null
     */
    public function getFormattedEndDateAttribute(): ?string
    {
        return $this->end_date ? $this->end_date->format('M d, Y h:i A') : null;
    }

    /**
     * Get event duration in hours
     *
     * @return float|null
     */
    public function getDurationAttribute(): ?float
    {
        if (!$this->end_date) {
            return null;
        }

        return $this->start_date->diffInHours($this->end_date, false);
    }
}
