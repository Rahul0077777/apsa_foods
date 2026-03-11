<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerOpening extends Model
{
    protected $table = 'career_openings';
    protected $fillable = [
        'title','location','department','description','requirements'
    ];
}
