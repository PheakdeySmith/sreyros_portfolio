<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'agency',
        'description',
        'thumbnail',
        'featured_image',
        'url',
        'is_featured',
        'display_order',
    ];

    /**
     * Get the images for the project.
     */
    public function images()
    {
        return $this->hasMany(ProjectImage::class)->orderBy('display_order');
    }
}
