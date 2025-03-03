<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $table = 'personal_info';

    protected $fillable = [
        'name',
        'title',
        'location',
        'about_text',
        'email',
        'instagram',
        'phone',
        'profile_image',
        'footer_text',
    ];
}
