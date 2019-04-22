<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table='user_role';
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id_role');
    }
    public function role()
    {
        return $this->belongsTo('App\Role', 'id_user', 'id_role');
    }
}
