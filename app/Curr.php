<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Curr extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'currs';

    protected $fillable = [
        'curr'
    ];
}
