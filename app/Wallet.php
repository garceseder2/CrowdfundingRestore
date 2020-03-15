<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //
     protected $table = 'wallet';
    
    protected $fillable = [
   		 'balance','transaction','user_id'
    ];
    
    public function user(){

    	return $this->belongsTo('App\User');
    }
    
    public function project(){

    	return $this->belongsToMany('App\Project');
    }
}
