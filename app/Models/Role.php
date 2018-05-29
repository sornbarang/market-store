<?php

namespace App\Models;

use Spatie\Permission\Contracts\Role as RoleInterface;
use Spatie\Permission\Models\Role as RoleModel;
use Illuminate\Database\Eloquent\Model;

class Role extends RoleModel implements RoleInterface
{
    protected $guard_name = 'web';

}
