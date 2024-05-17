<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'address',
        'mobile',
        'email',
        'introduction',
        'introFooter',
        'linkedIn',
        'facebook',
        'messenger',
        'birthdate',
        'whatsapp',
        'viber',
        'cv_file',
        'educ',
        'course',
        'yrgrad',
        'github'
    ];

    public function yearGrad(): string
    {
        return Carbon::parse($this->yrgrad)->format('F Y');
    }
}
