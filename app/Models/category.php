<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
	protected $table="category";

    public function product()
    {
        return $this->belongsToMany('App\Models\product', 'id', 'id_category');
    }
}
