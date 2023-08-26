{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="number_phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="number_phone" type="number" class="form-control @error('number_phone') is-invalid @enderror" name="number_phone" value="{{ old('number_phone') }}" required autocomplete="number_phone">

                                @error('number_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


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
                    انشاء حساب جديد
                </span>
                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-b-33 p-t-5">
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror input100" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="الاسم">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input value="{{ old('number_phone') }}" id="number_phone" type="text"
                            class="form-control @error('number_phone') is-invalid @enderror input100"
                            name="number_phone" placeholder="رقم الموبيل" value="{{ old('number_phone') }}"
                            pattern="\d*" maxlength="11" minlength="11" required>

                        @error('number_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Enter password">

                        <input id="password" placeholder="الرقم السرى" type="password"
                            class="form-control @error('password') is-invalid @enderror input100" name="password"
                            required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input id="password-confirm" type="password" class="form-control input100"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="تأكيد الرقم السرى">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>


                    <div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="login100-form-btn">
                            انشاء حساب جديد
                        </button>
                    </div>
                    <div class="button_register">
                        <a href="{{ route('login') }}">تسجيل الدخول</a>
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
