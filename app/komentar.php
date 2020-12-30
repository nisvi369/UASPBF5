<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = ['id_blog', 'nama', 'tanggal', 'isi',];
    protected $table = 'kategori';
}
