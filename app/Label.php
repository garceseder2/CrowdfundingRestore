<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{

    protected $table = 'crw_labels';
    
    protected $fillable = [
   		 'label'
    ];
    
    public function project(){

    	return $this->belongsToMany('App\Project');
    }

}