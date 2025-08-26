<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = [
        "nama_event",
        "date_event",
        "lokasi_event",
        "deskripsi_event",
        "gambar_event"
    ];
}
