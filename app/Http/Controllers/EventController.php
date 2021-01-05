<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;

class EventController extends Controller
{
    public function event(){
        $event = DB::table('Event')
        -> join('users','users.id', '=', 'event.id_user')
        -> select('event.id','users.nama','event.judul','event.gambar','event.tanggal','event.jam','event.deskripsi')
        -> get();

        return view('event',compact('event'));
    }
    
    public function form(){
        return view('form-event');
    }

    public function postEvent(Request $request){
        $gambar = $request->gambar;
        $namafile = $gambar->getClientOriginalName();

        $blog = new Event;
        $blog->id_user = $request->id_user;
        $blog->judul = $request->judul;
        $blog->tempat = $request->tempat;
        $blog->tanggal = $request->tanggal;
        $blog->jam = $request->jam;
        $blog->deskripsi = $request->deskripsi;
        $blog->gambar = $namafile;

        $gambar->move(public_path().'/img', $namafile);
        $blog->save();

        return redirect ('event');
    }
}
