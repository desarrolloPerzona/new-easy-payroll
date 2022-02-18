<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessWorkday extends Model
{
    use HasFactory;

    protected $fillable = ([
        'meal_time', 'meal_time_from', 'meal_time_to'
    ]);
}
