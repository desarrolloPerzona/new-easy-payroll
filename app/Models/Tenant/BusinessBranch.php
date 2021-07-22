<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessBranch extends Model
{
    use HasFactory;
    protected $table = 'business_branch';
    protected $fillable = [
        'name',
        'business_id',
        'description',
        'imss_patronal_id',
    ];
}
