<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MobilCars extends Model
{
    protected $fillable = [
        "nama_mobil",
        "harga_mobil",
        "lokasi_mobil",
        "deskripsi_mobil",
        "gambar_mobil"
    ];
}
