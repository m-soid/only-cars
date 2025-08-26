<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class merch extends Model
{
    protected $fillable = [
        "nama_merch",
        "harga_merch",
        "deskripsi_merch",
        "gambar_merch"
    ];
}
