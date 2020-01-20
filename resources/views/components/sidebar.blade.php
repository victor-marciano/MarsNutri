<div class="sidebar" data-color="theme-dark">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
        <div class="logo" style="text-align:center;">  
            {{-- <a href="http://www.creative-tim.com" class="simple-text logo-normal">               --}}
              <img src="{{ url('img/tccLogoNoBg.png') }}" width="130px" height="130px" >
            {{-- </a> --}}
        </div>
  
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">        
            {{-- <li {{ Route::current() == 'home' ? 'class="active"' : 'class="active'}}> --}}
            <li class="{{ Route::current()->getName() === 'home' ? 'active' : ''}}">
              <a href="{{ route('home') }}">
                <i data-feather="home" class="feather-menu-button"></i>
                  <p>Início</p>
                </a>
            </li>
            <li class="{{ Route::current()->getName() === 'calculadora' ? 'active' : ''}}">
                <a href="{{ route('calculadora') }}">                      
                    <i data-feather="tablet" class="feather-menu-button"></i>
                    <p>Calculadoras</p>
                </a>
            </li>
            <li>
                <a href="">                      
                    <i data-feather="users" class="feather-menu-button"></i>
                    <p>Clientes</p>
                </a>
            </li>
            <li>
                <a href="{{ route('feed') }}">                      
                    <i data-feather="rss" class="feather-menu-button"></i>
                    <p>Feed</p>
                </a>
            </li>
            <li>
                <a href="">                      
                    <i data-feather="shopping-cart" class="feather-menu-button"></i>
                    <p>Dieta e Treino</p>
                </a>
            </li>
            <li class="{{ Route::current()->getName() === 'faleConosco' ? 'active' : ''}}">
                <a href="{{ route('faleConosco') }}">                      
                    <i data-feather="send" class="feather-menu-button"></i>
                    <p>Fale conosco</p>
                </a>
            </li>        
            {{-- <li class="active-pro">
                <a href="">                   
                    <p>Junte-se a nós!</p>
                </a>
            </li> --}}
          </ul>
        </div>
      </div>