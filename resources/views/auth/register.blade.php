<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href=" {{ asset('Regform/css/style.css') }}">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="{{ asset ('Regform/images/gambar4.jpg') }}" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form" action="{{route('doRegister')}}" method="POST">
                        <h1>Create Your Account</h1>
                        {{csrf_field()}}
                        <div class="form-group form-input">
                            <input type="text" name="nama" id="nama" value="" required/>
                            <label for="name" class="form-label">Nama</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" value="" required/>
                            <label for="email" class="form-label">E-mail</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="password" name="password" id="password" value="" required/>
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="alamat" id="alamat" value="" required/>
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="no_hp" id="no_hp" value="" required />
                            <label for="no_hp" class="form-label">No HP</label>
                        </div>
                        <div class="form-group form-input">
                            
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"  required/>
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        </div>
                        <br>


                        <div class="form-submit">
                            <input type="submit" value="Create" class="submit" id="submit" name="submit" />
                            <a href="login" class="vertify-booking">Sudah memiliki akun? Silahkan login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset ('Regform/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('Regform/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>