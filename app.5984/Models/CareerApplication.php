<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
     protected $fillable = [
        'career_opening_id',
        'name',
        'email',
        'phone',
        'resume',
        'cover_letter',
        // jo jo fields form me aa rahi hain sab yaha likho
    ];
}
