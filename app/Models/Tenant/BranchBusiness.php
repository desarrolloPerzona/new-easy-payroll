<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchBusiness extends Model
{
    use HasFactory;

    protected $table = 'branch_business';

    protected $fillable = [
        'business_id',
        'branch_id',
    ];


}
