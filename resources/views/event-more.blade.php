@extends('navbar')
@section('content')
<head>
    <style type="text/css">
        body{
            margin-top:150px;
            background-color: #1c3a39bd;
            color: white;
        }
        .container{
            margin-bottom: 100px;
        }
        .more h1{
            font-weight: bold;
            margin-bottom: 20px;
        }
        .more img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="more">
            @foreach($event as $e)
            <center><h1>{{$e->judul}}</h1></center>
            <center>
            <div>
                <img src="{{asset('img/'.$e->gambar)}}" height="70%" width="40%" alt="" srcset="">
            </div>
            </center>
            <center><h5>Ditulis oleh {{$e->nama}}</h5></center>
            <br>
            <h5>Tanggal : {{$e->tanggal}}</h5>
            <h5>Jam : {{$e->jam}}</h5>
            <h5>Lokasi : {{$e->tempat}}</h5>
            
        
            <p>{!!$e->deskripsi!!}</p>
            <hr>
            <a href="/eventsaya" class="btn btn-light btn-sm">Kembali</a>
            @endforeach
        </div>
    </div>
</div>
</body>
@endsection
@extends('footer')