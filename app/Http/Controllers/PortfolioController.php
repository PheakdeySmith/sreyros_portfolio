<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\Testimonial;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Get personal information
        $personalInfo = PersonalInfo::first();

        // Get projects ordered by display order
        $projects = Project::orderBy('display_order')->get();

        // Get skills grouped by category
        $skills = Skill::orderBy('category')->orderBy('display_order')->get();
        $skillsByCategory = $skills->groupBy('category');

        // Get services
        $services = Service::orderBy('display_order')->get();

        // Get testimonials
        $testimonials = Testimonial::orderBy('display_order')->get();

        // Get social links
        $socialLinks = SocialLink::orderBy('display_order')->get();

        // Get site settings
        $siteSettings = SiteSetting::first();

        return view('frontends.layouts.app', compact(
            'personalInfo',
            'projects',
            'skillsByCategory',
            'services',
            'testimonials',
            'socialLinks',
            'siteSettings'
        ));
    }
}
