<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Profile extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'profiles';
    
    protected $fillable = [
        'nama','telp','kode_pos','deskripsi','gambar'
    ];
}
