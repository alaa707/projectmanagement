<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Neww()
    {
        return $this->hasMany('App\Neww');
    }
}
