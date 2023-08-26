<!DOCTYPE html>
<html lang="en">

<head>
    <title>Decorista</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/logoDECO.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-login-register/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts-login-register/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts-login-register/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-login-register/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-login-register/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-login-register/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-login-register/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-login-register/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-login-register/util.css">
    <link rel="stylesheet" type="text/css" href="css-login-register/main.css">
    <!--===============================================================================================-->
    <link href="{{ asset('css/customeCss.css') }}" rel="stylesheet">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images-login-register/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    تسجيل الدخول </span>
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input id="number_phone" type="number" class="input100"
                            @error('number_phone') is-invalid @enderror" name="number_phone"
                            value="{{ old('number_phone') }}" required autocomplete="email" autofocus
                            placeholder="رقم الموبيل المكون من 11 ">
                        {{-- <input class="input100" type="text" name="username" placeholder="رقم الموبيل المكون من 11 "> --}}
                        @error('number_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>

                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        {{-- <input class="input100" type="password" name="pass" placeholder="الرقم السرى"> --}}
                        <input id="password" placeholder="الرقم السرى" type="password"
                            class="input100 @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            تسجيل الدخول
                        </button>
                    </div>
                    <div class="button_register">
                        <a href="{{ route('register') }}">انشاء حساب جديد</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor-login-register/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor-login-register/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor-login-register/bootstrap/js/popper.js"></script>
    <script src="vendor-login-register/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor-login-register/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor-login-register/daterangepicker/moment.min.js"></script>
    <script src="vendor-login-register/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor-login-register/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js-login-register/main.js"></script>

</body>

</html>
