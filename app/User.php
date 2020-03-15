<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'lastname', 'email', 'password', 'id_document', 'birthday', 'gender', 'adders_1', 'adders_2', 'country', 'stade', 'city', 'postalcode'];
                                        
                                        
     public function comments(){

    	return $this->hasMany('App\Comments');
    }
                                        
     public function answers(){

    	return $this->hasMany('App\Answers');
    }
                                        

   public function projects(){

    	return $this->hasMany('App\Project');
    }
                                        
    public function conservations(){

    	return $this->hasMany('App\Conservation');
    }
                                        
     public function wallets(){

    	return $this->hasMany('App\Wallet');
    }
                                        
    public function image_user()
    {
        return $this->hasOne('App\Image_user');
    }
                                        
    /* public function Conservations_user_to(){

    	return $this->hasMany('App\Conservation', 'user_to');
    }*/

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
                                        
                                        
}
