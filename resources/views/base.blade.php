<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/CSS/style.css" />
</head>


<body>

    <!-- Navbar -->
    <div class="nav-start">
        <li class="nav-link"><a href="{{route('home')}}">Home</a></li>
        <li class="nav-link"><a href="{{route('register')}}">Sign in</a></li>
        <li class="nav-link"><a href="{{route('login')}}">Login</a></li>
        <li class="nav-link"><a href="{{route('characters.create')}}">Create</a></li>
        <li class="nav-link"><a href="{{route('home')}}">Profile</a></li>
        <li class="nav-link"><a href="{{route('home')}}">Logout</a></li>
    </div>


    @auth

    <p>Bienvenue {{auth()->user()->pseudo}} , Vous êtes autentifié</p>
    <p>
        <a href="/logout">Deconnectez-vous</a>
    </p>
    @endauth


    @yield('content')

</body>

</html>