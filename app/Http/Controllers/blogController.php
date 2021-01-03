<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Blog;
use App\Kategori;
use DB;

class blogController extends Controller
{
    public function index(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_user')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> get();

        return view('index',compact('blog'));
    }

    public function form(){
        $kategori = Kategori::all();
        return view('form', compact('kategori'));
    }

    public function bahari(){
        // $bahari = \App\Blog::where('id_kategori', '3')->get();
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_user')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '3')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function cagarAlam(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_user')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '2')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function budaya(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_user')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '1')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function konvensi(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_user')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '4')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function lainnya(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_user')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '5')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function postKonten(Request $request){
        $gambar = $request->gambar;
        $namafile = $gambar->getClientOriginalName();

        $blog = new Blog;
        $blog->id_user = $request->id_user;
        $blog->judul = $request->judul;
        $blog->tanggal = date('y-m-d');
        $blog->id_kategori = $request->id_kategori;
        $blog->konten = $request->konten;
        $blog->gambar = $namafile;

        $gambar->move(public_path().'/img', $namafile);
        $blog->save();

        return redirect ('/index');
    }

    public function more($id){
        // $blog = Blog::find($id);
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_user')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where('blog.id','=',$id)
        -> get();

        return view('more',compact('blog'));
    }
}
