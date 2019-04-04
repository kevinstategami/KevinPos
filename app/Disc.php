<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Disc extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'discs';
    
    protected $fillable = [
        'disc'
    ];
}
