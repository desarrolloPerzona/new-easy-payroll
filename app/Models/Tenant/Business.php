<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

    protected $table = 'business';
    protected $fillable = [
        'avarage_variable_calc',
        'borough',
        'business_name',
        'extra_time',
        'fiscal_regime',
        'imss_minimum_salary_patronal',
        'imss_send_movements',
        'industry',
        'logo_url',
        'logo_on_receipt',
        'municipality',
        'name',
        'rfc',
        'sat_fiel_cert',
        'sat_fiel_key',
        'sat_seal_cert',
        'sat_seal_key',
        'sat_seal_password',
        'sat_fiel_password',
        'state',
        'stp_account',
        'stp_status',
        'stp_password',
        'stp_payroll',
        'street',
        'zip_code',
    ];

    public function branches(){
        return $this->hasMany(Branch::class,'business_id','id');
    }

    public function banks(){
        return $this->hasMany(BanksBusiness::class,'business_id','id');
    }


}
