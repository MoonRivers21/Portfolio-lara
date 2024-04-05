<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover_image',
        'images',
        'project_title',
        'project_desc',
        'tech_stack_id',
        'date_develop',
    ];

    
}
