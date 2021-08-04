<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Our Guests List</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>

<body class="antialiased">
    <div class="guestList-container">
        <nav>
            <div class="nav-container">
                <span class="font-button-text">COMPANY X</span>
            </div>
            <div class="nav-container">
                <div class="font-button-text text-biru1">
                    <a href="{{ route('home') }}">Home</a>
                </div>
                <div class="font-button-selected text-kuning2">
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
        <img class="guestList-women-graphic" src="{{ asset('assets/images/women2.png') }}"
            alt="3D Women Sitting with Laptop">
        <div class="guestList-content">
            <div class="guestList-content-wrapper">
                <h1 class="font-heading1 text-biru1">All <span class="text-kuning2">guest</span> list</h1>
                <div class="guestList-table">
                    <table>
                        <thead>
                            <td class="text-putih font-table-heading">Name</td>
                            <td class="text-putih font-table-heading">Nama Event</td>
                            <td class="text-putih font-table-heading">TimeStamp</td>
                        </thead>
                        @foreach ($guests as $guest)
                            <tr>
                                <td class="text-kuning2 font-small-heading">{{ $guest->user->name }}</td>
                                <td class="text-kuning2 font-small-heading">{{ $guest->event_name }}</td>
                                <td class="text-kuning2 font-small-heading">{{ $guest->created_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
