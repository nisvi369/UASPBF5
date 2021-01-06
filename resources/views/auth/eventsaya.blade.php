@extends('navbar')
@section('content')
<head>
<style type="text/css">
    body{
        background-color:#1c3a39bd;
    }

    .box{
        margin-top : 100px;
        background-color: white;
    }
</style>
</head>
<body>
<section id="menu" class="menu">
    <div class="container">
        <div class="row">
        @if(count($event) < 1 )
        <div class="col-lg-12">
            <div class="box">
              <center>Kamu belum menuliskan event apapun</center>
            </div>
        </div>
        @else
        @foreach($event as $e)
        <div class="col-lg-4">
            <div class="box">
              <img src="{{asset('img/'.$e->gambar)}}" height="100%" width="100%" alt="" srcset="">
              <h4>{{$e->judul}}</h4>
              <h6>Tanggal : {{$e->tanggal}}</h6>
              <h6>Jam : {{$e->jam}}</h6>
              <h6>Lokasi : {{$e->tempat}} </h6>
              
              <p style="text-align: justify">{!!substr($e->deskripsi, 0, 200)!!}</p>
              <div class="aksi1">
                <a href="/eventmore/{{$e->id}}">More<a>
              </div><hr>
              <div class="aksi2">
                <a href="/edit-event/{{$e->id}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/hapus-event/{{$e->id}}" class="btn btn-secondary btn-sm" id="hapus" onclick="return confirm('Apakah Anda yakin akan menghapus {{$e->judul}}?')">Delete</a>
              </div>
            </div>
          </div>
        @endforeach
        @endif
        </div>
    </div>
</section>
</body>
@endsection
@extends('footer')