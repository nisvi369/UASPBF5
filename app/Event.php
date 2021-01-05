<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['id_user', 'judul', 'gambar', 'tempat', 'tanggal', 'jam', 'deskripsi',];
    protected $table = 'Event';
}
