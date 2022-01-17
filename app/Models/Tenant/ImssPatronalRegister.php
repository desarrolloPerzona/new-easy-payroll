<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImssPatronalRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'imss_sub_delegation_key', 'risk_premium','branch_id'
    ];



}
