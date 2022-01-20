<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Fiel extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name', 'fiel_password', 'fiel_private_key', 'fiel_cert'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('fiel_private_key')->useDisk('public');
        $this->addMediaCollection('fiel_cert')->useDisk('public');
    }
}
