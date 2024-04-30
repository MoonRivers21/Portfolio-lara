<?php

namespace App\Models;

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
        'cv_file'
    ];


}
