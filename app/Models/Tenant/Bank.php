<?php

namespace App\Models\Tenant;

use App\Models\BankList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    public function business(){
        return $this->hasOne(Business::class, 'id', 'branch');
    }
}
