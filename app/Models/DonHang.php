<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table="donhang";

    public function user()
    {
        return $this->belongsToMany('App\User', 'users', 'name', 'ten_user');
    }
}
