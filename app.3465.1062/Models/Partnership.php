<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    protected $fillable = [

        'business_name',

        'mobile',

        'email',

        'city_state',

        'partnership_type',

        'years_in_business',

        'categories_handled',

        'area_of_operation',

        'storage_facility',

        'delivery_setup',

        'sales_team_strength',

        'expected_volume',

        'preferred_products',

        'message',

    ];



    protected $casts = [

        'preferred_products' => 'array',

    ];
}
