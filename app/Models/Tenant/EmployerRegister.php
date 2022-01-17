<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'business_branch_id', 'risk_premium',
    ];
}
