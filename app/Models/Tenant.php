<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains, HasRoles;

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'user_id',
            'name',
            'last_name',
            'middle_name',
            'email',
            'tenancy_company',
            'tenancy_domain',
            'business_id',
            'role',
            'plan'
        ];
    }


}
