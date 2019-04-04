<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Transaksi extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Transaksi';

    protected $fillable = [
    'nama','stock','harga'
    ];
}
