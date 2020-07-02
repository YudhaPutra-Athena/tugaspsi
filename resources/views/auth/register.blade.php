<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register User</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
    
 <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title p-b-43">
                    Daftar
                </span>
                
                <div class="wrap-input100 validate-input" data-validate = "Name is required">
                    <input class="input100" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Nama</span>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: abcdefgh@gmail.com">
                    <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" type="text" name="email" id="email" class="input100 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input pattern=".{8,}" title="Eight or more characters" type="password" id="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Kata Sandi</span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="wrap-input100 validate-input" data-validate="re-Password is required">
                    <input class="input100" type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Konfirmasi Kata Sandi</span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" >Daftar</button>
                </div>
                <div class="text-center p-t-46 p-b-20">
                        @if (Route::has('login'))
                            <a class="txt2" href="{{ route('login') }}">
                                {{ __('Sudah punya akun? Ayo LogIn sekarang.') }}
                            </a>
                        @endif
                    </div>
                

            </form>

            <div class="login100-more" style="background-image: url('../img/background.jpg');">
            </div>
        </div>
    </div>
</div>

   <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>