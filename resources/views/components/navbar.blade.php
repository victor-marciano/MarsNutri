<nav class="navbar navbar-expand-lg bg-theme navbar-transparent navbar-absolute">
  <div class="container">    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">                
      <form id="formSearch" class="form-inline mr-auto">
          <div class="form-group no-border">
            <input size="34" type="text" class="form-control" placeholder="Buscar no site">
          </div>      
          <button type="submit" class="btn btn-neutral btn-icon btn-round feather-nav-button">              
              <i data-feather="search" color="green"></i>
          </button>
      </form>
      @auth
          <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                      <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('profile') }}" data-feather="user">Perfil</a>
                  <a class="dropdown-item" href="{{ route('logout') }}" data-feather="log-out">Logout</a>                          
                  </div>
              </li>                    
          </ul>
      @else
          <ul class="navbar-nav">                                
            <div class="avatar-name">
              Visitante
            </div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{-- <img src="{{ url('img/profile2.jpg') }}" class="avatar">  --}}
                <img src="{{ url('img/userIcon3.png') }}" class="avatar"> 
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('register') }}">
                  <i class="feather-menu-button" data-feather="meh"></i>
                  <p>Cadastro</p>
                </a>
                <a class="dropdown-item" href="{{ route('login') }}">
                  <i class="feather-menu-button" data-feather="log-in"></i>
                  <p>Login</p>
                </a>                          
              </div>
            </li>
          </ul>                   
      @endauth
    </div>
  </div>
</nav>