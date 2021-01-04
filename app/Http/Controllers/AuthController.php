<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\users;
use DB;

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
          $blog = DB::table('blog')
          -> join('users','users.id', '=', 'blog.id_user')
          -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
          -> get();  
          return view('/index', compact('blog'));
        }
    }  
      
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function register() {
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

      public function profile () {
        return view ('auth.profile');
      }

      public function ubahprofile () {
        return view ('auth.ubahprofile');
      }

      public function doubahprofile (Request $request,$id){

        $akun = Users ::findOrFail($id);
    
        $akun->update([
            'nama'  => $request->nama,
            'email'  => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal_lahir'  => $request->tanggal_lahir,
        ]);
        
        return redirect ('/profile')->with('sukses','Data Berhasil diupdate');
      }

      public function blogsaya(){
        $user = auth::user()->id;
        $blog = DB::table('blog')
        -> join('kategori', 'kategori.id', '=', 'blog.id_kategori')
        -> select('blog.id','kategori.jenis','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_user','=', $user)
        -> get();
        return view('auth.blogsaya',['blog'=> $blog]);
      }

      public function edit(Request $request, $id){
        $blog = \App\Blog::find($id);
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_user')
        -> join('kategori','kategori.id', '=', 'blog.id_kategori')
        -> select('blog.id','blog.id_kategori','kategori.jenis','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> first(); 
       
        return view('auth.edit', compact('blog'));
      }

      public function hapus($id){
        $blog = \App\Blog::find($id);
        $blog->delete();
        
        return redirect ('blogsaya')->with('Tulisan Anda telah dihapus');
      }
}
    


