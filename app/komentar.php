<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $fillable = ['id_blog', 'nama', 'tanggal', 'isi',];
    protected $table = 'kategori';
}
