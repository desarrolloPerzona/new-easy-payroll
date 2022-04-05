<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ImssPatronalRegister extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'imss_patronal_registers';

    protected $fillable = [
        'name', 'imss_sub_delegation_key', 'risk_premium','branch_id'
    ];


  public function branch(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
  {
      return $this->belongsToMany(Branch::class,'branch_imss_patronal_register');
  }

}

