
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .button {
                    background:transparent;
                    color: #fff;
                    padding-right:20px;
                    padding-left: 10px;
                    text-align: center;
                    text-decoration: none;
                    font-family: cursive;
                    display: inline-block;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 20px;
                   

            }
            .button:hover, .buttonn:active {
            text-decoration: none;
            transform: scale(1.4,1.4);
            color: #27ffff;
            }
            
            .navbar-brand:hover {
                opacity: 1 ;
	            transform: scale(1.4,1.4);
            }

    </style>


<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark"> 
    <div class="container">
              <a class=" navbar-brand" href="{{ route('home') }}" style="
                    background: -webkit-linear-gradient(#FF8C00, #00FFFF);
                    -webkit-background-clip: text;
                    font-weight:bold ;
                    -webkit-text-fill-color: transparent;">
                    {{ config('app.name') }} PROJECT  
                </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{route('deposit')}}" class="button">Deposit</a>
                  </li>
               <li>
                    <a  href="{{ route('master-barang') }}" class="button">Master Barang</a>
                  </li>
                  <li>
                       <a  href="{{route('suplier') }}"class="button">Data Supplier</a>
                       </li>
                <li>
                    <a  href="{{ route('transaksi')}}"class="button">Data Transaksi</a>
                   </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link text-light " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} 
                        @if (auth()->user()->avatar == null)
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                        @endif
                        @if (auth()->user()->avatar != null)
                        <img src="{{ asset('images/'. auth()->user()->avatar) }}" alt="" width="30" height="30" class="rounded-circle">
                        @endif
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                  </svg>  My Profile 
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                 <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                               </svg> {{ __('Logout') }} 
                         </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid" style="background-color:
font-family: Times New Roman, Times, serif;">
      <!-- Right Side Of Navbar -->
    <div class="container text-center " style="margin-top:30px;">
        @if (auth()->user()->avatar == null)
        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="200" fill="currentColor" class="bi bi-person-circle mb-2" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        @endif
        @if (auth()->user()->avatar != null)
        <img src="{{ asset('images/'. auth()->user()->avatar) }}" alt="" width="300" height="200" class=" rounded-circle mb-2" >
        @endif
        <h1 class="display-5"> {{ Auth::user()->name }} </h1>
        <p class="lead">Programmer | Student</p>
        <a href="{{route('profile.edit')}}" class="btn btn-info btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
          </a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col text-center" style="font-family: cursive;">
            <h1>About</h1>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
    <div class="col text-left"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi atque iste, perferendis sequi velit natus alias consectetur itaque illo. 
        Blanditiis, sit? Aliquid blanditiis 
        at quod molestias adipisci eos quas voluptatum!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi atque iste, perferendis sequi velit natus alias consectetur itaque illo. 
        Blanditiis, sit? Aliquid blanditiis 
        at quod molestias adipisci eos quas voluptatum!
    </p></div>
    <div class="col"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, rerum accusamus obcaecati eum, animi optio unde quis possimus repellendus consequuntur deserunt et,
         aspernatur facilis corrupti cum quasi! Quasi, fugiat qui!
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi atque iste, perferendis sequi velit natus alias consectetur itaque illo. 
         Blanditiis, sit? Aliquid blanditiis 
         at quod molestias adipisci eos quas voluptatum!
        </p></div>
  </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background: white;">
  <div class="container">
      <div class="row">
          <div class="col text-center">
            <h1>Social Media</h1>
          </div>
      </div>
      <div class="col text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg> <a href="https://www.facebook.com/Aditya.Ristanto.M/" class="text-dark">Facebook</a>

      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
      </svg> <a href="https://github.com/AdityaRistantoMukti" class="text-dark">GitHub</a>
    </div>
  </div>
</div>

<nav class="navbar-bottom fixed-bottom navbar-dark bg-dark">
    <div class="container" style="padding:10px">
        <div class="text-center text-light">
            @Copyright with 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg>
              <a  href="{{ route('home') }}" style="
                    background: -webkit-linear-gradient(#FF8C00, #00FFFF);
                    -webkit-background-clip: text;
                    font-weight:bold ;
                    -webkit-text-fill-color: transparent;
                    ">
                    {{ config('app.name') }} PROJECT  
                </a>
        </div>
      
    </div>
  </nav>
  