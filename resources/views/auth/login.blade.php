<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
                    <form id="booking-form" action="{{route('postLogin')}}" method="POST" >
                        <h1>Login</h1>
                        {{csrf_field()}}

                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" value="" required/>
                            <label for="email" class="form-label">E-mail</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="password" name="password" id="password" value="" required/>
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <br>


                        <div class="form-submit">
                            <input type="submit" value="Login" class="submit" id="submit" name="submit" />
                            <a href="/daftar" class="vertify-booking">Belum memiliki akun? Silahkan buat akun anda</a>
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