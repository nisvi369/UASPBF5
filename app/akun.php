<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\akun as Authenticatable;

class Akun extends Model
{
    protected $fillable = ['nama', 'email', 'password', 'no_hp', 'alamat', 'tanggal_lahir',];
    protected $table = 'akun';


}
