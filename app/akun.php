<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    protected $fillable = ['nama', 'email', 'password', 'no_hp', 'alamat', 'tanggal_lahir',];
    protected $table = 'akun';

    public function blog(){
    	return $this->hasOne('App\blog');
    }
}
