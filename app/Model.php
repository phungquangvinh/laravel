<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    protected $table='user_role';
    protected $fillable = [
        'id_user', 'id_role',
    ];
}
