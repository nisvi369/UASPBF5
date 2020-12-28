<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['id_akun', 'id_kategori', 'tanggal', 'konten',];
    protected $table = 'blog';

    public function komentar(){
    	return $this->hasOne('App\komentar');
    }
}
