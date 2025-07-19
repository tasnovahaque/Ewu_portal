<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    body{
        background-image: url("assets/images/background.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .login_container{
        display: flex;
        flex-direction: row-reverse;
    }
    .login_div{
        height: 100vh;
        width: 500px;
        background-color:  	rgba(255,255,255, 0.4);
    }
    .container{
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .card{
        height: 580px;
        width: 400px;
        background-color: white;
    }
    .top_logo{
        position: relative;
        left: 150px;
        top: 10px;
        height: 70px;
        widows: 90px;
        z-index: 10000;
    }
    .card-body{
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: red; */
    }
    .input_field{
        border: none;
        border-bottom-style: solid;
        border-width: 2px;
        border-color: rgba(0, 0, 0, 0.2);
        color: rgba(0, 0, 0, 0.4);
        width: 350px;
        height: 40px;
        font-weight: bold;
        font-size: 15px;
    }
    ::placeholder {
        color: rgba(0, 0, 0, 0.7);
        font-weight: bold;
        font-size: 15px;
    }
    .green_text{
        width: 350px;
        text-align: center;
        color: green;
    }
    h5{
        width: 350px;
        text-align: center;
    }
    .login{
        display: flex;
        margin-top: 5px;
    }
    .btn{
        position: relative;
        left: 156px;
        border-radius: 2rem;
    }
    .forget{
        height: 30px;
        width: 350px;
        background-color: blue;
        border-radius: none;
        text-align: center;
        text-decoration: none;
        color: white;
        padding: 3px;
        margin-top: 5px;
    }
    .activate{
        height: 30px;
        width: 350px;
        background-color: red;
        border-radius: none;
        text-align: center;
        text-decoration: none;
        color: white;
        padding: 3px;
        margin-top: 5px;
    }
    .activate_div{
        display: flex;
        flex-direction: row;
    }
    .forget_div{
        display: flex;
        flex-direction: row;
    }
</style>
<body>
    <div class="login_container">
        <main class="login_div">
            <div class="container">
                <div class="">
                    <div class="box">
                        <img class="top_logo" src="{{url('assets/images/top_logo.jpeg')}}" alt="">
                        <div class="card">
                            {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                            <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <p class="green_text">1. If your login ID is activated sign in to your account</p>
                                                <p class="green_text">2. If your login ID is not activated please activate your login ID first</p>
                                                <h5>Sign in to your Account</h5>
                                                <input id="email" type="email" placeholder="Student Email" class="input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="">
                                            <div class="col-md-6">
                                                <input id="password" type="password" placeholder="Password" class="input_field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="">
                                            <div class="login">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn">
                                                    {{ __('SIGN IN') }}
                                                </button>
                                            </div>
                                        </div>
                
                                        <div class="forget_div">
                                            @if (Route::has('password.request'))
                                                <a class="forget" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="activate_div">
                                            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                                            <a class="activate" href="{{ route('register') }}">
                                                {{ __('Activate Your Id First') }}
                                            </a>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>




