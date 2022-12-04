<div class="">
    <div class="wrapper sticky-top">
        <nav class="">
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="#">Bibliotheque UCC </a></div>
                <ul class="links">
                    <li><a class="hover @if(request()->routeIs('home')) active @endif" href="{{route('home')}}">Home</a>
                    </li>
                    <li><a class="hover " href=" #">About</a></li>
                    <li>
                        <a class=" hover desktop-link @if(request()->routeIs('work')) active @endif"
                            href="#">Travaux</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Travaux</label>
                        <ul>
                            <li><a class="hover" href="{{route('publisher')}}">PUBLIER</a></li>
                            <li><a class="hover" href="{{route('work')}}">Consultation</a></li>
                            <li><a class="hover" href="#">Drop Menu 3</a></li>
                            <li><a class="hover" href="#">Drop Menu 4</a></li>
                        </ul>
                    </li>

                    <li><a class="hover" href="#">Feedback</a></li>

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
                    <li class="mr-2 ml-2"><a href="{{route('login')}}" class="sign">se connecter</a></li>
                    <li class="mr-2 ml-2"><a href="{{route('register')}}" class="login">S'inscrire</a></li>
                    @endauth

                </ul>

            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-user"></i></label>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </nav>
    </div>
</div>