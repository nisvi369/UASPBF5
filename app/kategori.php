<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['jenis',];
    protected $table = 'kategori';

    public function blog(){
    	return $this->hasOne('App\Blog');
    }
}
