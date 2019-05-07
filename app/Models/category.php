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

    public function product()
    {
        return $this->belongsToMany('App\Model\product', 'pr_ca', 'id_product', 'id_category');
    }
}
