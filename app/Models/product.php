<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
	protected $table="product";

	public function category()
    {
        return $this->belongsToMany('App\Model\category', 'id', 'id_category');
    }

    public function Comment()
    {
    	return $this->hasMany('App\Models\Comment','idCategory','id');
    }
}
