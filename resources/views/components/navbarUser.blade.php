<div class="">
    
    <div class="wrapper sticky-top">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <input type="checkbox" id="show-login">
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
                   
                    @endauth

                </ul>

            </div>
            <div class="login">
                <ul class="linkLogin">
                    <li><a class="hover login" data-toggle="modal" data-target="#modal-lg" href="">login</a></li>
                    <li><a class="hover sign" href="">register</a></li>
                   </ul>
            </div>
         
            <label for="show-login" class="user-icon"><i class="fas fa-user"></i></label>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </nav>
    </div>

    <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">domaine</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-12 col-form-label ">{{ __('file') }}</label>

                            <div class="form-goup">
                                <input id="name" type="file" class="form-control @error('file') is-invalid @enderror"
                                    autocomplete="name" autofocus ="file">

                                @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"
                                >Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>


                    </form>

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    
</div>