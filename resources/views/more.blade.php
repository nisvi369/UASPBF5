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
            @foreach($blog as $blog)
            <center><h1>{{$blog->judul}}</h1></center>
            <div>
                <img src="{{asset('img/'.$blog->gambar)}}" height="70%" width="40%" alt="" srcset="">
            </div>
            <center><h6>{{$blog->tanggal}} oleh {{$blog->nama}}</h6></center>
            <p>{!!$blog->konten!!}</p>
            <hr>
            <a href="/blogsaya" class="btn btn-light btn-sm">Kembali</a>
            @endforeach
        </div>
    </div>
</div>
</body>
@endsection
@extends('footer')