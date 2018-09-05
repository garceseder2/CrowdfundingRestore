<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    //
     protected $table = 'crw_answers_comments';
    
    
    protected $fillable = [
   		 'answer','comments_id','user_id'
    ];
    
     public function comment(){

    	return $this->belongsTo('App\Project');
    }
    
     public function user(){

    	return $this->belongsTo('App\User');
    }
}
