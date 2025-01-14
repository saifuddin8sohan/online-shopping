<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //



    public function products(){

        return $this->hasMany('App\Product');


    }

    public function role(){

        return $this->belongsTo('App\Role');
 

    }

    public function Order(){

              
        return $this->hasMany('App\Order');


    }

    public function Like(){

              
        return $this->hasMany('App\Like');


    }


    public function admin($role){

        if($this->role->name== $role ){
            
            return true;

        }
        
        return false;

    }

 


}





