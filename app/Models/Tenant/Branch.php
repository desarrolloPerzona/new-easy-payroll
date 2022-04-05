<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory, SoftDeletes;

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

    public function imssPatronalRegister()
    {
        return $this->belongsToMany(ImssPatronalRegister::class,'branch_imss_patronal_register');
    }
}
