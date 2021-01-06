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
              <center><h4>{{$e->judul}}</h4></center>
              <h6><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-calendar-date" viewBox="0 0 16 16">
                      <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg> &nbsp; {{$e->tanggal}}</h6>
              <h6><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                  </svg> &nbsp; {{$e->jam}}</h6>
              <h6><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg> &nbsp; {{$e->tempat}}</h6>
              
              <!-- <p style="text-align: justify">{!!substr($e->deskripsi, 0, 200)!!}</p> -->
              <div class="aksi1">
                <a href="/eventmore/{{$e->id}}">More<a>
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