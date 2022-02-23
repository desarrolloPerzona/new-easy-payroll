<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessFestiveDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'date', 'working', 'schedule_all_day', 'schedule_from', 'schedule_to'
    ];
}
