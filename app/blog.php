<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['id_user', 'id_kategori', 'judul', 'tanggal', 'gambar', 'konten',];
    protected $table = 'blog';

    public function komentar(){
    	return $this->hasOne('App\komentar');
    }
}
