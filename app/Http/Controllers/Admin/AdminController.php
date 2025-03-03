<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PersonalInfo;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Get counts for dashboard statistics
        $projectsCount = Project::count();
        $skillsCount = Skill::count();
        $servicesCount = Service::count();
        $testimonialsCount = Testimonial::count();
        $socialLinksCount = SocialLink::count();

        // Get personal info
        $personalInfo = PersonalInfo::first();

        // Get recent projects
        $recentProjects = Project::orderBy('created_at', 'desc')->take(5)->get();

        return view('backend.dashboard.index', compact(
            'projectsCount',
            'skillsCount',
            'servicesCount',
            'testimonialsCount',
            'socialLinksCount',
            'personalInfo',
            'recentProjects'
        ));
    }
}
