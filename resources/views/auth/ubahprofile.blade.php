@extends('navbar') 
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    body{
    margin-top:150px;
    color:#48D1CC;
    text-align: left;
    background-color:  #1c3a39bd;    
    }
    .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col, .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3, .my-3 {
        margin-bottom: 1rem!important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100%!important;
    }
    .shadow-none {
        box-shadow: none!important;
    }

        </style>
</head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb"> 
              <li class="breadcrumb-item"><h3>My Profile</h3></li>
              <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li> -->
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth::user()->nama}}</h4>
                      <!-- <p class="text-secondary mb-1">{{auth::user()->email}}</p> -->
                      <p class="text-muted font-size-sm">{{auth::user()->alamat}}</p>
                      <!-- <button class="btn btn-primary">Ubah Profil</button> -->
           
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <form method="POST" action="/ubahprofile/{{auth::user()->id}}" class="col-md-6">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{auth::user()->nama}}" >
                </div>
                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{auth::user()->email}}" >
                </div>
                <div class="form-group">
                    <label for="nama">Phone</label>
                    <input type="number" class="form-control" name="no_hp" id="no_hp" value="{{auth::user()->no_hp}}" >
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{auth::user()->alamat}}" >
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{auth::user()->tanggal_lahir}}" >
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
               
           
              
             
              </div>
              
              </div>
              
           
            </div>
          </div>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>
@endsection
@extends('footer')