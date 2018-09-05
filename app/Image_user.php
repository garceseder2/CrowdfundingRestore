<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_user extends Model
{
    //
    protected $table = 'image_user';
    
    protected $fillable = [
   		 'name','user_id'
    ];
    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
}
