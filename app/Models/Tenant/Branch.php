<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'business_id',
        'description',
        'imss_patronal_registry_id',
        'business_id',

    ];


    public function Business(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function ImssPatronalRegisters(){
        return $this->hasOne(ImssPatronalRegister::class);
    }
}
