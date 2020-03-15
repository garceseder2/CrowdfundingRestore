<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conservation extends Model
{
    //
    protected $table = 'conversation';
    
    protected $fillable = ['to_id', 'message', 'user_id'];


    public function user(){

    	return $this->belongsTo('App\User');
    }
    
   /* public function user_to(){

    	return $this->belongsTo('App\User', 'to_id');
    }*/
}
