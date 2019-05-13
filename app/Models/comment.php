<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table="comment";

    public function Product()
    {
    	return $this->belongsTo('App\Models\product','id','id');
    }

    public function User()
    {
    	return $this->belongsTo('App\User','idUser','id');
    }
}
