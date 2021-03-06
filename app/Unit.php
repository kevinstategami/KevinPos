<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Unit extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'units';
    
    protected $fillable = [
        'unit'
    ];
}
