<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchImssPatronalRegister extends Model
{
    use HasFactory;

    protected $table = 'branch_imss_patronal_register';

    protected $fillable = [
        'branch_id',
        'imss_patronal_register_id',
    ];
}
