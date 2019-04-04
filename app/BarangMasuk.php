<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class BarangMasuk extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'barang_masuks';

    protected $fillable = [
        'nama','jumlah','via'
    ];
}
