<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanksBusiness extends Model
{
    use HasFactory;

    protected $table = 'banks_business';

    protected $fillable = [
        'business_id',
        'bank_id',
    ];


}
