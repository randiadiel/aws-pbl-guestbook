<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>

<body class="antialiased">
    <div class="home-container">
        <nav>
            <div class="nav-container">
                <div class="font-button-selected text-kuning2">
                    <a href="{{ route('home') }}">Home</a>
                </div>
                <div class="font-button-text text-biru1">
                    <a href="{{ route('guest') }}">guests</a>
                </div>
            </div>
        </nav>
        <div class="home-content">
            <p class="font-button-text text-biru1 p-hello">Who are you?</p>
            <h1 class="font-heading1 text-biru1 ">Register.</h1>
            <p class="font-small-heading text-biru1 p-fill">we want to know you more!</p>
            @if ($message = Session::get('success'))
                <p class="font-small-heading" style="color: green;">{{ $message }}</p>
            @endif
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="font-small-heading" style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-container form-register-container">

                    <div class="form-register-divider">
                        <div class="form-content">
                            <div class="form-content-icon">
                                <div class="form-content-icon-wrapper">
                                    <span class="iconify" data-inline="false" data-icon="bx:bx-user"
                                        style="color: #ffffff; font-size: 47px;"></span>
                                </div>
                            </div>
                            <div class="form-content-input">
                                <label for="name" class="font-input-heading text-abu1"> Name </label>
                                <input id="name" name="name" value="{{ old('name') }}" placeholder="John"
                                    class="font-small-heading text-kuning2" type="text" required autofocus />
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="form-content-icon">
                                <div class="form-content-icon-wrapper">
                                    <span class="iconify" data-inline="false" data-icon="carbon:email"
                                        style="color: #ffffff; font-size: 45px;"></span>
                                </div>
                            </div>
                            <div class="form-content-input">
                                <label for="email" class="font-input-heading text-abu1"> Email </label>
                                <input id="email" name="email" value="{{ old('email') }}"
                                    placeholder="john@example.com" class="font-small-heading text-kuning2" type="email"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="form-register-divider">
                        <div class="form-content">
                            <div class="form-content-icon">
                                <div class="form-content-icon-wrapper">
                                    <span class="iconify" data-inline="false" data-icon="codicon:key"
                                        style="color: #fff; font-size: 43px;"></span>
                                </div>
                            </div>
                            <div class="form-content-input">
                                <label for="password" class="font-input-heading text-abu1"> Password </label>
                                <input id="password" name="password" value="{{ old('password') }}"
                                    placeholder="Password" class="font-small-heading text-kuning2" type="password"
                                    required autocomplete="new-password" />
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="form-content-icon">
                                <div class="form-content-icon-wrapper">
                                    <span class="iconify" data-inline="false" data-icon="codicon:key"
                                        style="color: #fff; font-size: 43px;"></span>
                                </div>
                            </div>
                            <div class="form-content-input">
                                <label for="password_confirmation" class="font-input-heading text-abu1"> Confirm
                                    Password
                                </label>
                                <input id="password_confirmation" name="password_confirmation" placeholder="Password"
                                    class="font-small-heading text-kuning2" type="password" required />
                            </div>
                        </div>
                    </div>
                    <label for="submit-button" class="form-content-submit"
                        style="margin-left: auto; margin-top: .5rem;">
                        <div class="form-content-icon-wrapper form-content-icon-wrapper-send">
                            <span class="iconify" data-inline="false" data-icon="bx:bxs-send"
                                style="color: #ffffff; font-size: 37px;"></span>
                        </div>
                    </label>
                    <input id="submit-button" class="hidden" type="submit">
                </div>
            </form>
            <p class="font-small-heading text-biru1">Have an account? click <a class="font-link-text"
                    href="{{ route('login') }}">here</a>!
            </p>
        </div>
        <img class=" home-women-graphic" src="{{ asset('assets/images/women4.png') }}"
            alt="3D Women Standing with Ipad">
    </div>
</body>

</html>
