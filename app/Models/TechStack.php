<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TechStack extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img_link',
        'img',
    ];


    public function logoImg(): string
    {
        $img = (!empty($this->img)) ? $this->img : $this->img_link;
        return $img;
    }

    public function recentProjects(): BelongsToMany
    {
        return $this->belongsToMany(RecentProject::class);
    }

}
