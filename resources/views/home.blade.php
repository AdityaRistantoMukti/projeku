
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

          <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            @import url("https://fonts.googleapis.com/css?family=Righteous");
            @import url("https://fonts.googleapis.com/css?family=Luckiest+Guy");
             body {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                background-size: 100% 100%;
                overflow: hidden;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
                -webkit-font-smoothing: antialiased;
                animation: pulse 5s infinite;
            }

            @keyframes pulse {
            0% {
                background-color: rgb(10, 180, 247);
            }
            50% {
                background-color: rgb(41, 5, 99);
            }
            100% {
                background-color: rgb(10, 180, 247);
            }
            }
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

            :root {
            --primary-color: #FFD700;
            --secondary-color: #fff;
            --complimentary-color: #00FFFF;
                    
            }


            
            h1 {
            margin: 0;
            font-size: 90px;
            padding: 0;
            font-family: "Luckiest Guy", cursive;
            color: var(--primary-color);
            transform: translateY(-600px);
            animation: 2s titleAnimation  forwards 0.8s;
            z-index: 10;
            opacity: 0;
            position: relative;

            text-shadow: 0 0.1em 20px orange, 0.05em -0.03em 0 orange,
                0.05em 0.005em 0 orange, 0em 0.08em 0 orange,
                0.05em 0.08em 0 orange, 0px -0.03em 0 orange;
               
         }
           
             h2 span {
            position: relative;
            font-family: "Luckiest Guy", cursive;
            top: 20px;
            display: inline-block;
            -webkit-animation: bounce 0.3s ease infinite alternate;
            font-size: 80px;
            color: #fff;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
                0 5px 0 #ccc, 0 6px 0 transparent, 0 7px 0 transparent, 0 8px 0 transparent,
                0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);
            }

            h2 span:nth-child(2) {
            -webkit-animation-delay: 0.1s;
            }

            h2 span:nth-child(3) {
            -webkit-animation-delay: 0.2s;
            }

            h2 span:nth-child(4) {
            -webkit-animation-delay: 0.3s;
            }

            h2 span:nth-child(5) {
            -webkit-animation-delay: 0.4s;
            }

            h2 span:nth-child(6) {
            -webkit-animation-delay: 0.5s;
            }

            h2 span:nth-child(7) {
            -webkit-animation-delay: 0.6s;
            }

            h2 span:nth-child(8) {
            -webkit-animation-delay: 0.2s;
            }

            h2 span:nth-child(9) {
            -webkit-animation-delay: 0.3s;
            }

            h2 span:nth-child(10) {
            -webkit-animation-delay: 0.4s;
            }

            h2 span:nth-child(11) {
            -webkit-animation-delay: 0.5s;
            }

            h2 span:nth-child(12) {
            -webkit-animation-delay: 0.6s;
            }

            h2 span:nth-child(13) {
            -webkit-animation-delay: 0.7s;
            }

            h2 span:nth-child(14) {
            -webkit-animation-delay: 0.8s;
            }

            
            h3  {
            position: relative;
            font-family: "Luckiest Guy", cursive;
            top: 10px;
            display: inline-block;
            -webkit-animation: bounce 0.3s ease infinite alternate;
            font-size: 50px;
            color: #fff;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
                0 5px 0 #ccc, 0 6px 0 transparent, 0 7px 0 transparent, 0 8px 0 transparent,
                0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);
            }
            @keyframes titleAnimation {
    0% {
      transform: translateY(-50px);
      opacity: 1;
      -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
      clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 80%);
  }
  20% {
      transform: translateY(0);
      opacity: 1;
      -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
      clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
  }
  80% {
       transform: translateY(0);
       opacity: 1;
      -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
      clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 15%);
  }
  100% {
       transform: translateY(0px);
       opacity: 1;
    
  }
}

            @-webkit-keyframes bounce {
            100% {
                top: -20px;
                text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
                0 5px 0 #ccc, 0 6px 0 #ccc, 0 7px 0 #ccc, 0 8px 0 #ccc, 0 9px 0 #ccc,
                0 50px 25px rgba(0, 0, 0, 0.2);
            }
            }
            @keyframes bop {
            0% {
                transform: scale(0.9);
            }
            50%,
            100% {
                transform: scale(1);
              }
            }

            @keyframes bopB {
            0% {
                transform: scale(0.9);
            }
            80%,
            100% {
                transform: scale(1) rotateZ(-3deg);
              }
            }

            @keyframes skewBg {
            0% {
                transform: scale(.5);
            }
            100% {
                transform: scale(1);
            }
            }

            @keyframes underline {
            100% {
                width: 100%;
            }
            }

            @keyframes slideIn {
            100% {
                transform: translateY(0px);
                
                opacity: 1;
            }
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-top: 30px;
            }      
            
            a.button{
                position: absolute;
                font-size: 25px;
                color: #fff;
                transform: translate(-150px);
                text-decoration: none;
                text-transform: uppercase;
                width: 300px;
                height: 50px;
                padding-top:8px;
                font-family: Museo Sans Cyrl,trebuchet ms,arial,sans-serif;
                box-sizing: border-box;
                background: linear-gradient(90deg, #DC143C, #FFD700, #ffeb3b, #DC143C);
                background-size: 400%;
                border-radius: 30px;
                
            }
            a.button:hover {
                animation: mymove 8s linear infinite;
            }
            @keyframes mymove{
                0%{
                    background-position: 0%''
                }
                100%{
                    background-position: 400%;
                }
            }
            a.button:before {
                content: '';
                position: absolute;
                top: -5px;
                Left: -5px;
                right: -5px;
                bottom: -5px;
                z-index: -1;
                background: linear-gradient(90deg, #DC143C, #FFD700, #ffeb3b, #DC143C);
                background-size: 400%;
                border-radius: 30px;
                opacity: 0;
                transition: 0.5s;
                
            }
          a.button:hover:before {
            filter: blur(20px);
            opacity: 1;
            animation: mymove 8s linear infinite;
          }
        </style>
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-transaparant">
            <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>                
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
                        <a id="navbarDropdown" class="nav-link text-light " style="border-bottom-style: solid;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} 
                            
                            @if (auth()->user()->avatar == null)
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                            @endif
                            @if (auth()->user()->avatar != null)
                            <img src="{{ asset('images/'. auth()->user()->avatar) }}" alt="" width="30" height="30" class=" rounded-circle  ">
                            @endif
                            </a>
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <div class = "container projects">
                        <h2 class="mb-2"><span>w</span>
                            <span>e</span>
                            <span>l</span>
                            <span>c</span>
                            <span>o</span>
                            <span>m</span>
                            <span>e</span>
                        </h2>
                        <h1 class="mt-2"><span>"{{Auth::user()->name}}" </span>
                        </h1>
                        <h3 class="mb-5 ">to my project</h3>
                        <br>
                        <a href="{{route('deposit')}}" class="button ">go to project</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

