<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecentProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover_image',
        'project_title',
        'project_desc',
        'images',
        'tech_stack_id',
        'date_develop',
    ];

    protected $casts = [
        'tech_stack_id' => 'json',
        'images' => 'json'
    ];

    public function tech_stacks(): BelongsTo
    {
        return $this->belongsTo(TechStack::class, 'tech_stack_id');
    }
}
