<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'image_path',
        'caption',
        'display_order',
    ];

    /**
     * Get the project that owns the image.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
