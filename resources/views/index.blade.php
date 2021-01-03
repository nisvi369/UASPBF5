@extends('navbar')
@extends('header')
@section('content')
  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container">
      <div class="section-title">
        <h2>Let's Share <span>Our Wonderful Memories</span></h2>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <a href="/"><li>Show All</li></a>
            <a href="/blogBahari"><li>Bahari</li></a>
            <a href="/blogCagarAlam"><li>Cagar Alam</li></a>
            <a href="/blogBudaya"><li>Budaya</li></a>
            <a href="/blogKonvensi"><li>Konvensi</li></a>
            <a href="/blogLainnya"><li>Lainnya</li></a>
          </ul>
        </div>
      </div>
      <br>
      <div class="row">
        @foreach($blog as $blog)
          <div class="col-lg-4">
            <div class="box">
              <img src="{{asset('img/'.$blog->gambar)}}" height="100%" width="100%" alt="" srcset="">
              <h4>{{$blog->judul}}</h4>
              <h6>{{$blog->tanggal}} oleh {{$blog->nama}}</h6>
              <p style="text-align: justify">{!!substr($blog->konten, 0, 200)!!}...</p>
              <div class="aksi1">
                <a href="/more/{{$blog->id}}">More<a>
              </div><hr>
            </div>
          </div>
        @endforeach
        </div>
    </div>
  </section>
  <!-- End Menu Section -->
@endsection
@extends('footer')