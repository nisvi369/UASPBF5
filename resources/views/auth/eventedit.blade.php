@extends('navbar')
@section('content')
<html>
<head>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<style type="text/css">
    body{
        background-color:#1c3a39bd;
        color: white;
    }

    #deskripsi{
        background-color:white;
        color: black;
    }

    #form{
        margin-bottom:100px;
    }
</style>
<body>
<div class="container" id="form">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/edit-event/{{$event->id}}/update" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <!-- <label for="nama">Penulis</label> -->
                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{auth()->user()->id}}">
                </div>
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{ $event->judul}}" required oninvalid="this.setCustomValidity('Form harap diisi semua')" oninput="setCustomValidity('')"/>
                </div>
                <div class="form-group">
                    <label for="tempat">Lokasi</label>
                    <input type="text" class="form-control" name="tempat" id="tempat" value="{{ $event->tempat}}" required oninvalid="this.setCustomValidity('Form harap diisi semua')" oninput="setCustomValidity('')"/>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $event->tanggal}}" required oninvalid="this.setCustomValidity('Form harap diisi semua')" oninput="setCustomValidity('')"/>
                </div>
                <div class="form-group">
                    <label for="jam">Waktu</label>
                    <input type="time" class="form-control" name="jam" id="jam" value="{{ $event->jam}}" required oninvalid="this.setCustomValidity('Form harap diisi semua')" oninput="setCustomValidity('')"/>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="hidden" name="deskripsi" value="{{$event->deskripsi}}">
                    <div id="deskripsi" style="min-height: 10em;" class="ql-container ql-snow">
                    <p style="text-align: justify">{!!($event->deskripsi)!!}</p>
                </div>
                <div class="form-group>
                    <label for="gambar">Gambar</label>
                    <br>
           
                    <img class="img-fluid" src="{{  asset( 'img'. '/' . $event->gambar) }}" height="70%" width="40%">
                    <br>
                    
                    <input type="file" name="gambar" id="gambar" value="{{asset('img/'.$event->gambar)}} " required="required" />
                </div><br><br>
                <button type="submit" class="btn btn-info">Simpan</button>
                <a href="/" class="btn btn-light">Kembali</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill-image-resize-module@3.0.0/image-resize.min.js"></script>
<!-- <script src="https://cdn.quilljs.com/1.3.6/quill.core.js"></script> -->

<script>//texteditorquill
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [ 'link', 'image', 'video', 'formula' ],          // add's image support
        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],

        ['clean']                                         // remove formatting button
    ];

    var quill = new Quill('#deskripsi', {
        modules: {
            toolbar: toolbarOptions,
            imageResize: {
              displaySize: true // default false
            },
        },
        theme: 'snow'
    });
    $(document).ready(function () {
        $("form").submit(function () {
            $("input[name=deskripsi]").val($("#deskripsi>div").html());
        });
    });
</script>

</body>
</html>
@endsection