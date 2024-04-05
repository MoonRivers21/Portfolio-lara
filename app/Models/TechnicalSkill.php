<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'stack_title',
        'started_yr',
    ];

    /**
     * Calculate the experience in years.
     *
     * @return int
     */
    public function calculateExperienceInYears(): int
    {
        return Carbon::parse($this->started_yr)->diffInYears(now());
    }


}
