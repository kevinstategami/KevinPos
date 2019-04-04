<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class BarangKeluar extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'barang_keluars';

    protected $fillable = [
        'nama','jumlah','via'
    ];
}
