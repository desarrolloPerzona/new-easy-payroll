<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiscalRegime extends Model
{
    protected $table = 'fiscal_regimes';

    protected $fillable = [
        'name',
        'code',
    ];
}
