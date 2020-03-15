<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'crw_category';
    
    protected $fillable = [
   		 'name'
    ];
    
     public function projects(){

    	return $this->hasMany('App\Project');
    }
    
}
