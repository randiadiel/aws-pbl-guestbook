<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard For Our Guests</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>

<body class="antialiased">
    <div class="home-container">
        <nav>
            <div class="nav-container">
                <span class="font-button-text">COMPANY Z</span>
            </div>
            <div class="nav-container">
                <div class="font-button-selected text-kuning2">
                    <a href="{{ route('home') }}">Home</a>
                </div>
                <div class="font-button-text text-biru1">
                    <a href="{{ route('guest') }}">guests</a>
                </div>
            </div>
            <div class="nav-container">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <div class="font-button-text" :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </div>
                    </form>
                @endauth
                @guest
                    <a class="font-button-text" href="{{ route('login') }}">Login</a>
                @endguest
            </div>
        </nav>
        <div class="home-content">
            <p class="font-button-text text-biru1 p-hello">Hello People</p>
            <h1 class="font-heading1 text-biru1 ">Welcome to our <br>
                <span class="text-kuning2">Guest</span>Book!
            </h1>
            <p class="font-small-heading text-biru1 p-fill">Fill the book below</p>
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
            @auth
                <form action="{{ route('addGuest') }}" method="POST">
                    @csrf
                    <div class="form-container">
                        <div class="form-content">
                            <div class="form-content-icon">
                                <div class="form-content-icon-wrapper">
                                    <span class="iconify" data-inline="false" data-icon="bx:bx-calendar-check"
                                        style="color: #ffffff; font-size: 47px;"></span>
                                </div>
                            </div>
                            <div class="form-content-input">
                                <label for="event_name" class="font-input-heading text-abu1">Event Name</label>
                                <input name="event_name" value="{{ old('event_name') }}" placeholder="Vaksinasi Gratis"
                                    class="font-small-heading text-kuning2" type="text">
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="form-content-icon">
                                <div class="form-content-icon-wrapper">
                                    <span class="iconify" data-inline="false" data-icon="fluent:location-12-regular"
                                        style="color: #ffffff; font-size: 45px;"></span>
                                </div>
                            </div>
                            <div class="form-content-input">
                                <label for="location" class="font-input-heading text-abu1">Location</label>
                                <input name="location" value="{{ old('location') }}" placeholder="RS. Siloam KJ"
                                    class="font-small-heading text-kuning2" type="text">
                            </div>
                        </div>
                        <label for="submit-button" class="form-content-submit">
                            <div class="form-content-icon-wrapper form-content-icon-wrapper-send">
                                <span class="iconify" data-inline="false" data-icon="bx:bxs-send"
                                    style="color: #ffffff; font-size: 37px;"></span>
                            </div>
                        </label>
                        <input id="submit-button" class="hidden" type="submit">
                    </div>
                </form>
            @endauth
            @guest
                <div>
                    <a class="btn btn-kuning1 font-small-heading" href="{{ route('register') }}">Get Started</a>
                </div>
            @endguest
        </div>
        <img class="home-women-graphic" src="{{ asset('assets/images/women1.png') }}"
            alt="3D Women Standing with Ipad">
    </div>
</body>

</html>
