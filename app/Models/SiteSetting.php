<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_title',
        'site_description',
        'logo',
        'favicon',
        'primary_color',
        'secondary_color',
        'show_hero',
        'show_about',
        'show_projects',
        'show_skills',
        'show_services',
        'show_testimonials',
        'show_contact',
    ];

    /**
     * Get the boolean attributes.
     */
    protected $casts = [
        'show_hero' => 'boolean',
        'show_about' => 'boolean',
        'show_projects' => 'boolean',
        'show_skills' => 'boolean',
        'show_services' => 'boolean',
        'show_testimonials' => 'boolean',
        'show_contact' => 'boolean',
    ];
}
