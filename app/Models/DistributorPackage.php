<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistributorPackage extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'type',
        'price',
        'button_text',
        'image',
        'features',
        'status'
    ];

    protected $casts = [
        'features' => 'array'
    ];

    public function orders()
    {
        return $this->hasMany(DistributorOrder::class,'package_id');
    }
}