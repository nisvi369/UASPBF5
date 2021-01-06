<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Event;
use App\Users;

class EventController extends Controller
{
    public function event(){
        $event = DB::table('Event')
        -> join('users','users.id', '=', 'event.id_user')
        -> select('event.id','users.nama','event.tempat','event.judul','event.gambar','event.tanggal','event.jam','event.deskripsi')
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
    public function more ($id){
        // $blog = Blog::find($id);
        $event = DB::table('event')
        -> join('users','users.id', '=', 'event.id_user')
        -> select('event.id','users.nama','event.judul','event.tempat','event.gambar','event.tanggal','event.jam','event.deskripsi')
        -> where('event.id','=',$id)
        -> get();

        return view('event-more',compact('event'));
    }
    public function eventsaya(){
        $user = auth::user()->id;
        $event = DB::table('event')
        -> join('users','users.id', '=', 'event.id_user')
        -> select('event.id','users.nama','event.judul','event.tempat','event.gambar','event.tanggal','event.jam','event.deskripsi')
        -> where('event.id_user','=',$user)
        -> get();
        return view('auth.eventsaya',['event'=> $event]);
    }

    public function hapusevent($id){
        $event = \App\event::find($id);
        $event->delete();
        
        return redirect ('eventsaya')->with('Event Anda telah dihapus');
    }

    public function editevent(Request $request, $id){
       
        $event = event::findOrFail($id);
       
        return view('auth.eventedit',compact('event'));
    }

    public function updateevent (Request $request,$id) {

        $event = event::findOrFail($id);
   
  
        $event->update([
            'judul'  => $request->judul,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'deskripsi' => $request->deskripsi,
            
        ]);
        
  
          $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
          $event->gambar = $request->file('gambar')->getClientOriginalName();
          $event->save();
        
        return redirect ('/eventsaya')->with('sukses','Data Berhasil diupdate');;
        }

}
