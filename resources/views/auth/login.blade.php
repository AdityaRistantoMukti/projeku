
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

</head>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif; 
            width: 100%;
            height: 100%;
            animation: pulse 8s infinite;

}

@keyframes pulse {
  0% {
    background-color: black;
  }
  50% {
    background-color: rgb(46, 102, 124);
  }
  100% {
      background-color: black;
  }
}

.box {
    width: 300px;
    padding: 40px;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: black;
    text-align: center;
    border: 1px solid skyblue;
    border-radius: 16px;
    animation-name: fadeInLeft;
    animation-duration: 2s;
}
@keyframes fadeInLeft {
            0% {
               opacity: 0;
               transform: translate(-50%);
            }
            100% {
               opacity: 1;
               transform: translate(-50%, -50%);
            }
         }
.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}
.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid skyblue;
    padding: 14px 10px;
    width: 200px;
    color: white;
    outline: none;
    border-radius: 24px;
    transition: 0.25;
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 280px;
    border-color: #2ecc71;
}
.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25;
    cursor: pointer;
}
.box input[type="submit"]:hover {
    background: #2ecc71;
}
.box a{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    font-family: sans-serif;
    border: 2px solid #3498db;
    width: 100px;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25;
    cursor: pointer;
}
.box a:hover{
    background: #3498db;
}
 </style>

<body>
    <form class="box" action="{{ route('login') }}" method="post">
        @csrf
        <h1>Login</h1>
        <input id="email" type="text"  placeholder="Email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    
        <input type="submit" value="Login"> 
        <a  href="{{ route('register') }}">Register</a>
    </form>
</body>
</html>