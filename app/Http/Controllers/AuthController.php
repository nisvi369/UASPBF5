<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\users;

class AuthController extends Controller {

    public function login()
    {
     return view('auth.login');
    }
    public function postlogin(Request $request){

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }
    }  
      
      public function logout(){
        Auth::logout();
        return redirect('/');
     }

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
    
        return redirect('/login')->with('Sukses','Pendaftaran Akun Berhasil');
        
      }
}
    

