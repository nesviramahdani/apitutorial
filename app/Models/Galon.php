<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galon extends Model
{
    /**
     * @var string
     */
    protected $table = 'galons';

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'nama_galon','alamat_galon', 'bukaTutup', 'telepon','harga','image'
    ];
}
