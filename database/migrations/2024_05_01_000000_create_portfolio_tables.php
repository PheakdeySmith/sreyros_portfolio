<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Personal Information Table
        Schema::create('personal_info', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->text('about_text')->nullable();
            $table->string('email')->nullable();
            $table->string('instagram')->nullable();
            $table->string('phone')->nullable();
            $table->string('profile_image')->nullable();
            $table->text('footer_text')->nullable();
            $table->timestamps();
        });

        // Skills Table
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('proficiency')->nullable();
            $table->string('category')->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });

        // Projects Table
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year');
            $table->string('agency')->nullable();
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });

        // Project Images Table (for project galleries)
        Schema::create('project_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('image_path');
            $table->string('caption')->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });

        // Social Links Table
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('platform');
            $table->string('url');
            $table->string('icon')->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });

        // Services Table
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });

        // Testimonials Table
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_position')->nullable();
            $table->string('client_company')->nullable();
            $table->text('testimonial_text');
            $table->string('client_image')->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });

        // Site Settings Table
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('site_description')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->boolean('show_hero')->default(true);
            $table->boolean('show_about')->default(true);
            $table->boolean('show_projects')->default(true);
            $table->boolean('show_skills')->default(true);
            $table->boolean('show_services')->default(true);
            $table->boolean('show_testimonials')->default(true);
            $table->boolean('show_contact')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('services');
        Schema::dropIfExists('social_links');
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('personal_info');
    }
};
