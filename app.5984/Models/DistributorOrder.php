<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistributorOrder extends Model
{
    protected $fillable = [
        'user_id',
        'package_id',
        'name',
        'email',
        'phone',
        'notes',
        'status'
    ];

    public function package()
    {
        return $this->belongsTo(DistributorPackage::class,'package_id');
    }
}