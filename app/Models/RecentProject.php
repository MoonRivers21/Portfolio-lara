<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

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

    public function techStacks(array $stackIds): array
    {
        $stackTitles = TechStack::whereIn('id', $stackIds)->pluck('title')->toArray();
        return $stackTitles;
    }

    public function techStacksWithImage(array $stackIds): array
    {
        // Retrieve the title and img_link fields for the given stack IDs
        $stacks = TechStack::whereIn('id', $stackIds)->get(['title', 'img_link']);

        // Transform the collection into an array
        $stackDetails = $stacks->map(function ($stack) {
            return [
                'title' => $stack->title,
                'img_link' => $stack->img_link,
            ];
        })->toArray();


        return $stackDetails;
    }

    public function shortDescProject()
    {
        return Str::limit($this->project_desc, 40);
    }


    public function shortDesc(): string
    {
        return Str::limit($this->project_desc, 100);
    }


    public function longDescProject()
    {
        return Str::limit($this->project_desc, 250);
    }


    public function reformmatedDate(): string
    {
        //return Carbon::parse($this->date_develop)->format('M d, Y');
        return Carbon::parse($this->date_develop)->diffForHumans();
    }

    public function getImagePaths(): array
    {
        return $this->images;
    }

}
