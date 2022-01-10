<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    /**
     * @var string
     */
    protected $table = 'history';

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'nama','jumlah', 'harga'
    ];
}