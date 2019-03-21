<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name', 'email', 'description','keywords', 'maintainanc_desc','status' 
    ];
}
