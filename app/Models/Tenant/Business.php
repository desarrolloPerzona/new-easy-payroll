<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'business';
    protected $fillable = [
        'name',
        'business_name',
        'logo_url',
        'logo_on_receipt',
        'industry',
        'RFC',
        'fiscal_regime',
        'stp_account',
        'stp_clabe_account',
        'fiel_key',
        'fiel_cert',
        'fiel_password',
        'street',
        'ext_number',
        'int_number',
        'zip_code',
        'borough',
        'municipality',
        'state',
        'extra_time',
        'average_variable_calc',
        'stp_payroll',
        'imss_minimum_salary_patronal',
        'imss_send_movements',

    ];

    public function branches(){
        return $this->belongsToMany(Branch::class);
    }

    public function banks(){
        return $this->hasMany(BanksBusiness::class,'business_id','id');
    }

}
