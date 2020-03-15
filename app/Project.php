<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    

    
    protected $table = 'crw_projects';
    
    protected $fillable = [
   		 'title_project', 'category_id', 'general_description','bussines_potential','collection_time','percentage_gain','TIR', 'user_id'
    ];
    

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function labels(){

    	return $this->belongsToMany('App\Label');
    }

     public function detailed_descriptions(){

    	return $this->hasMany('App\Detailed_description');
    }
    
     public function category(){

    	return $this->belongsTo('App\Category');
    }
    
      public function Comments(){

    	return $this->hasMany('App\Comments');
    }
    
    public function wallets(){

    	return $this->belongsToMany('App\Wallet');
    }
    
     public function scopeSearch($query, $title_project){

    	return $query->where('title_project', 'like', "%$title_project%")->orwhere('general_description', 'like', "%$title_project%")->orwhere('bussines_potential', 'like', "%$title_project%");
    }
    
    

}
