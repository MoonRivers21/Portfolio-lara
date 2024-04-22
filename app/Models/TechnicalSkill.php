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
     * @return string
     */

    public function calculateExperienceFormatted(): string
    {
        $startDate = Carbon::parse($this->started_yr);
        $endDate = now();

        $totalMonths = $startDate->diffInMonths($endDate);
        $years = intdiv($totalMonths, 12);
        $months = $totalMonths % 12;

        if ($years >= 2) {
            return "$years yrs";
        } elseif ($years == 1) {
            return "$years yr";
        } else {
            return "$months months";
        }
    }


}
