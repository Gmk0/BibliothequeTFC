<!-- Navbar -->
<nav class="navbar pb-3 pt-2 navbar-expand-lg navbar-light shadow bg-white sticky-top ">
  <!-- Container wrapper -->
  <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="https://mdbgo.com/">
          <img src="{{asset('images/logo.png')}}" height="50" width="30" alt="MDB Logo"
              loading="lazy" style="margin-top: -1px;" />
              
      </a>
      <h3 class="mr-lg-3">BIBLIOTHEQUE</h3>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
          <!-- Left links -->
          <ul class="navbar-nav ms-auto mb-2 mr-lg-2 mb-lg-0">
              <li class="nav-item @if(request()->routeIs('home')) actives @endif">
                  <a class="nav-link " href="#">Accueil</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Travaux</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Recherche</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle @if(request()->routeIs('work')) actives @endif" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travaux</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{route('work')}}">Consulter</a>
                    <a class="dropdown-item" href="#">Consulter</a>
                  </div>
                </li>
              
          </ul>
          <!-- Left links -->

          <div class="d-flex align-items-center ms-lg-5  ml-lg-2">
              
              
              @auth
              <div class="btn-group ">

                <button type="button" class="btn login dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="">{{Auth::user()->name}}</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item disabled" href="#">Disabled action</a>
                  <div class="dropdown-divider"></div>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf

                  <button type="submit" class="dropdown-item" href="#">LOGOUT</button>
                </form>
                </div>
              </div>
              
              @else
              <a  href="{{route('login')}}" class=" register btn btn-warning px-3 me-2">
                Login
              </a>
            <a href="{{route('register')}}" class="register btn btn-primary me-3">
                Sign for free
            </a>
              @endauth
             
          </div>
      </div>
      <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

