<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailed_description extends Model
{
    //
	protected $table = 'crw_detailed_description';
    
    protected $fillable = ['stage', 'time_month', 'cost', 'description', 'project_id'];


    public function project(){

    	return $this->belongsTo('App\Project');
    }

}
