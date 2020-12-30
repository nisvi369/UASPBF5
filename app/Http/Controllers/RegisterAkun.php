<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Auth;


class RegisterAkun extends Controller
{
    public function register()
    {
      return view('auth.register');
    }

    public function doRegister(Request $request)
  {
      $this->validate ($request,[
        'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'tanggal_lahir' => 'required',    
      ]);

    $user = new users;

    $user->nama = $request->nama;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->alamat = $request->alamat;
    $user->no_hp = $request->no_hp;
    $user->tanggal_lahir = $request->tanggal_lahir;
    $user->save(); // save user

    return redirect('/')->with('Sukses','Pendaftaran Akun Berhasil');
    
  }
}
