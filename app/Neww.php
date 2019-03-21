<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neww extends Model
{
   protected $fillable = [
    
       
       'user_id' , 'cat_id','subject','content','image'
    ];
    
    public function getFeatruedAttribute($image)
    {
        return asset($image);
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
