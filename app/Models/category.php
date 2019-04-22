<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
	protected $table="category";

    public function Comment()
    {
    	return $this->hasMany('App\Models\Comment','idCategory','id');
    }
}
