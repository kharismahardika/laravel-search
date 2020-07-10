<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = ['tempat_wisata', 'provinsi', 'jumlah_pengunjung'];
}
