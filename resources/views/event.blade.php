@extends('navbar')
@extends('header')
@section('content')
  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container">
      <div class="section-title">
        <h2>Let's Explore <span>Our Beautiful World</span></h2>
      </div>

      <!-- <div class="row">
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
      </div> -->
      <br>
      <div class="row">
        @foreach($event as $e)
          <div class="col-lg-4">
            <div class="box">
              <img src="{{asset('img/'.$e->gambar)}}" height="100%" width="100%" alt="" srcset="">
              <h4>{{$e->judul}}</h4>
              <h6>Tanggal : {{$e->tanggal}}</h6>
              <h6>Jam : {{$e->tanggal}}</h6>
              <p style="text-align: justify">{!!substr($e->deskripsi, 0, 200)!!}</p>
              <div class="aksi1">
                <a href="/more/{{$e->id}}">More<a>
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