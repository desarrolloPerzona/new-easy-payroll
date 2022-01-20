<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ImssPatronalRegister extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name', 'imss_sub_delegation_key', 'risk_premium','branch_id'
    ];


    public function branch(){
        return $this->hasOne(Branch::class,'id','branch_id');
    }

}