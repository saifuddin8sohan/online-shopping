<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //

    protected $fillable = ['user_id','product_id',];



    public function product(){

        return $this->hasMany('App\Product');


    }


    public function UserLike(){

              
        return $this->product;


    }
    
}
