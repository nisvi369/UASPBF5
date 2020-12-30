<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\blog;
use DB;

class blogController extends Controller
{
    public function index(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_akun')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> get();

        return view('index',compact('blog'));
    }

    public function form(){
        return view('form');
    }

    public function bahari(){
        // $bahari = \App\Blog::where('id_kategori', '3')->get();
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_akun')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '3')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function cagarAlam(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_akun')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '2')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function budaya(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_akun')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '1')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function konvensi(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_akun')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '4')
        -> get();
        return view('index',['blog'=> $blog]);
    }

    public function lainnya(){
        $blog = DB::table('blog')
        -> join('users','users.id', '=', 'blog.id_akun')
        -> select('blog.id','users.nama','blog.judul','blog.gambar','blog.tanggal','blog.konten')
        -> where ('blog.id_kategori','=', '5')
        -> get();
        return view('index',['blog'=> $blog]);
    }
}
