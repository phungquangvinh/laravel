<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='role';
    public function user_role()
    {
        return $this->hasMany('App\UserRole', 'id_user', 'id_role');
    }
}
