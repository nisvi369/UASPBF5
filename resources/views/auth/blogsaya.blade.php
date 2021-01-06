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
        @if(count($blog) < 1 )
        <div class="col-lg-12">
            <div class="box">
              <center>Kamu belum menuliskan cerita apapun</center>
            </div>
        </div>
        @else
        @foreach($blog as $blog)
          <div class="col-lg-4">
            <div class="box">
              <img src="{{asset('img/'.$blog->gambar)}}" height="100%" width="100%" alt="" srcset="">
              <h4>{{$blog->judul}}</h4>
              <h6>Tanggal : {{$blog->tanggal}}</h6>
              <h6>Kategori : {{$blog->jenis}}</h6>
              <p style="text-align: justify">{!!substr($blog->konten, 0, 250)!!}</p>
              <div class="aksi1">
                <a href="/more/{{$blog->id}}">More<a>
              </div><hr>
              <div class="aksi2">
                <a href="/edit/{{$blog->id}}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/hapus/{{$blog->id}}" class="btn btn-secondary btn-sm" id="hapus" onclick="return confirm('Apakah Anda yakin akan menghapus {{$blog->judul}}?')">Delete</a>
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