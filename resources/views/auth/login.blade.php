@php
    use App\Enums\UserTypesEnums;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <title> HealthStudent</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!-- <link rel="icon" type="image/png" href="{{ asset('Login_v4/images/icons/favicon.ico') }}"/> -->
    <link rel="icon" type="image/png" href="{{ asset('logo-png.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_v4/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('Login_v4/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_v4/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_v4/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_v4/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_v4/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_v4/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_v4/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_v4/css/main.css') }}">
    <!--===============================================================================================-->
</head> 
 
<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('Login_v4/images/bckgr.jpg') }}');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <span class="login100-form-title p-b-49">
                        Connexion
                    </span>
                    @if ($errors->count() > 0)
                        <span class="text-danger mb-3">{{ $errors->first() }}</span>
                    @endif

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Veuillez selectionner un statut">
                        <span class="label-input100">Statut</span>
                        <select id="statut" name="statut" class="input100" required>
                            @foreach (UserTypesEnums::values() as $value)
                                <option value="{{ $value }}"> {{ $value }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Veuillez remplir ce champ">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" value="{{ old('email') }}"
                            placeholder=" Entrez votre Email " required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Mot de passe </span>
                        <input class="input100" type="password" name="password"
                            placeholder=" Entrez votre mot de passe " required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <!-- <div class="container-login100-form-btn"> -->

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Connexion
                            </button>
                        </div>
                    </div>

            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('Login_v4/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Login_v4/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Login_v4/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('Login_v4/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Login_v4/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Login_v4/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('Login_v4/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Login_v4/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('Login_v4/js/main.js') }}"></script>

</body>

</html>
