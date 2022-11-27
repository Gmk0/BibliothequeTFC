<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> BIBILIOTHE UCC</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
    <link rel="stylesheet" href="stylefull.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="bg-gray-100">

    <div class="wrapper sticky-top">
        <nav class="">
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="#">Bibliotheque UCC </a></div>
                <ul class="links">
                    <li><a class="@if(request()->routeIs('home')) active @endif" href="{{route('home')}}">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li>
                        <a class="@if(request()->routeIs('work')) active @endif" href="#"
                            class="desktop-link">Travaux</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Travaux</label>
                        <ul>
                            <li><a href="{{route('publisher')}}">PUBLIER</a></li>
                            <li><a href="{{route('work')}}">Consultation</a></li>
                            <li><a href="#">Drop Menu 3</a></li>
                            <li><a href="#">Drop Menu 4</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Feedback</a></li>

                    @auth

                    <li>
                        <a href="#" class="desktop-link">Profil</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Features</label>
                        <ul>
                            <LI><A>logout</A></LI>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn">LOGOUT</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="ml-3"><a href="{{route('login')}}" class="sign">se connecter</a></li>
                    <li class="ml-1, n"><a href="{{route('register')}}" class="btn btn-outline-primary">S'inscrire</a></li>
                    @endauth

                </ul>

            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </nav>
    </div>

    <div>

    </div>

    <div class="mt-2">


        @yield("content")

    </div>



    <x-Footer />


    @livewireScripts
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>