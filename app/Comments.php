<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
     protected $table = 'crw_comments';
    
    
    protected $fillable = [
   		 'comment','project_id','user_id'
    ];
    
     public function project(){

    	return $this->belongsTo('App\Project');
    }
    
      public function answers(){

    	return $this->hasMany('App\Answers');
    }
    
     public function user(){

    	return $this->belongsTo('App\User');
    }
}