<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessWorkday extends Model
{
    use HasFactory;

    protected $fillable = ([
        'meal_time', 'meal_time_from', 'meal_time_to',
        'monday', 'monday_from', 'monday_to',
        'tuesday', 'tuesday_from', 'tuesday_to',
        'wednesday', 'wednesday_from', 'wednesday_to',
        'thursday', 'thursday_from', 'thursday_to',
        'friday', 'friday_from', 'friday_to',
        'saturday', 'saturday_from', 'saturday_to',
        'sunday', 'sunday_from', 'sunday_to',
    ]);
}
