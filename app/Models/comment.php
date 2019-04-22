<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table="comment";

    public function Category()
    {
    	return $this->belongsTo('App\Models\Category','idCategory','id');
    }

    public function User()
    {
    	return $this->belongsTo('App\User','idUser','id');
    }
}
