<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SocialLink;
use App\Models\Testimonial;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create personal info
        PersonalInfo::create([
            'name' => 'Mark Johnson',
            'title' => 'Art Director & Designer',
            'location' => 'London',
            'about_text' => 'Collaboration is at the heart of my work. I thrive in dynamic environments where ideas flow freely and diverse perspectives converge.',
            'email' => 'name@email.com',
            'instagram' => '@theinstaName',
            'phone' => '+44 123 456 7890',
            'footer_text' => 'Let\'s make something awesome together. Convallis diam nisl vulputate rhoncus neque bibendum. Amet euismod arcu non semper eu rhoncus dolor amet sed.',
        ]);

        // Create skills
        $skills = [
            ['name' => 'UI/UX Design', 'proficiency' => 95, 'category' => 'Design', 'display_order' => 1],
            ['name' => 'Web Design', 'proficiency' => 90, 'category' => 'Design', 'display_order' => 2],
            ['name' => 'Graphic Design', 'proficiency' => 85, 'category' => 'Design', 'display_order' => 3],
            ['name' => 'HTML/CSS', 'proficiency' => 80, 'category' => 'Development', 'display_order' => 1],
            ['name' => 'JavaScript', 'proficiency' => 75, 'category' => 'Development', 'display_order' => 2],
            ['name' => 'Adobe Photoshop', 'proficiency' => 90, 'category' => 'Tools', 'display_order' => 1],
            ['name' => 'Adobe Illustrator', 'proficiency' => 85, 'category' => 'Tools', 'display_order' => 2],
            ['name' => 'Figma', 'proficiency' => 95, 'category' => 'Tools', 'display_order' => 3],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // Create projects
        $projects = [
            [
                'title' => 'Hover Over',
                'year' => 2023,
                'agency' => 'Apple',
                'description' => 'A modern web application with hover effects and smooth animations.',
                'thumbnail' => 'images/64ebde19dacb057e3fce70ae_zesan-h-W8Pdw1epwm0-unsplash-min.jpg',
                'url' => 'https://example.com/project1',
                'is_featured' => true,
                'display_order' => 1,
            ],
            [
                'title' => 'Flying Dir',
                'year' => 2023,
                'agency' => 'Clipper',
                'description' => 'An innovative directory application with flying transitions.',
                'thumbnail' => 'images/64ebde29f9ed8e2663a1ed1b_daniel-korpai-8WjFJQnb_90-unsplash-min.jpg',
                'url' => 'https://example.com/project2',
                'is_featured' => true,
                'display_order' => 2,
            ],
            [
                'title' => 'Valentine',
                'year' => 2023,
                'agency' => 'City',
                'description' => 'A beautiful e-commerce website with a Valentine\'s Day theme.',
                'thumbnail' => 'images/64ebde106f778a04b80e84b4_nubelson-fernandes-6rrIT4YcqoI-unsplash-min.jpg',
                'url' => 'https://example.com/project3',
                'is_featured' => false,
                'display_order' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // Create project images
        $projectImages = [
            [
                'project_id' => 1,
                'image_path' => 'images/project1-image1.jpg',
                'caption' => 'Homepage design',
                'display_order' => 1,
            ],
            [
                'project_id' => 1,
                'image_path' => 'images/project1-image2.jpg',
                'caption' => 'Mobile view',
                'display_order' => 2,
            ],
            [
                'project_id' => 2,
                'image_path' => 'images/project2-image1.jpg',
                'caption' => 'Directory listing',
                'display_order' => 1,
            ],
            [
                'project_id' => 3,
                'image_path' => 'images/project3-image1.jpg',
                'caption' => 'Product page',
                'display_order' => 1,
            ],
        ];

        foreach ($projectImages as $image) {
            ProjectImage::create($image);
        }

        // Create services
        $services = [
            [
                'title' => 'UI/UX Design',
                'description' => 'Creating intuitive and engaging user interfaces and experiences.',
                'icon' => 'design-icon',
                'display_order' => 1,
            ],
            [
                'title' => 'Web Development',
                'description' => 'Building responsive and modern websites and web applications.',
                'icon' => 'web-icon',
                'display_order' => 2,
            ],
            [
                'title' => 'Brand Identity',
                'description' => 'Developing cohesive brand identities that resonate with your audience.',
                'icon' => 'brand-icon',
                'display_order' => 3,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // Create testimonials
        $testimonials = [
            [
                'client_name' => 'John Smith',
                'client_position' => 'CEO',
                'client_company' => 'Tech Solutions',
                'testimonial_text' => 'Working with Mark was a pleasure. He delivered a stunning website that exceeded our expectations.',
                'display_order' => 1,
            ],
            [
                'client_name' => 'Sarah Johnson',
                'client_position' => 'Marketing Director',
                'client_company' => 'Creative Agency',
                'testimonial_text' => 'Mark\'s design skills are exceptional. He transformed our brand identity and helped us stand out in a competitive market.',
                'display_order' => 2,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        // Create social links
        $socialLinks = [
            [
                'platform' => 'Instagram',
                'url' => 'https://instagram.com/theinstaName',
                'icon' => 'instagram-icon',
                'display_order' => 1,
            ],
            [
                'platform' => 'LinkedIn',
                'url' => 'https://linkedin.com/in/markjohnson',
                'icon' => 'linkedin-icon',
                'display_order' => 2,
            ],
            [
                'platform' => 'Dribbble',
                'url' => 'https://dribbble.com/markjohnson',
                'icon' => 'dribbble-icon',
                'display_order' => 3,
            ],
        ];

        foreach ($socialLinks as $link) {
            SocialLink::create($link);
        }

        // Create site settings
        SiteSetting::create([
            'site_title' => 'Mark Johnson - Art Director & Designer',
            'site_description' => 'Portfolio of Mark Johnson, an Art Director and Designer based in London.',
            'logo' => 'Mark',
            'primary_color' => '#000000',
            'secondary_color' => '#ffffff',
            'show_hero' => true,
            'show_about' => true,
            'show_projects' => true,
            'show_skills' => true,
            'show_services' => true,
            'show_testimonials' => true,
            'show_contact' => true,
        ]);
    }
}
