<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{

	protected $fillable = ['name'];



    //
    protected $fillable = ['name'];
    public function imageable(){

    	return $this->morphTo();
    }

}
