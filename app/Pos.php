<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pos extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'pos';

    protected $fillable = [
    'nama','stock','harga'
    ];
}
