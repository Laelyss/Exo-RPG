@extends('base')

@section('content')
<div class="bloc-regist-blur">
    <div class="text-blur">
        <p>Séduit ? Envie de tenter l'aventure ? Il vous faudra alors vous déclarer dans le registre des aventuriers, éguiser votre arme et trouver des compagnons de routes pour combattre les montres qui foule cette terre..</p>
    </div>
</div>

<div class="position-register">
    <div class="register">
        <form action="/register" method="post" id="formulaire">
            @csrf

            <label for="username">Pseudo</label>
            <input class="register__input" type="text" name="pseudo" placeholder="Your pseudo" id="username">

            <label for="email">Email</label>
            <input class="register__input" type="email" name="email" placeholder="Your email" id="password">

            <label for="password">Password</label>
            <input class="register__input" type="password" name="password" placeholder="Your password" id="password">

            <label for="password">Repeat Password</label>
            <input class="register__input" type="password" name="password_confirmation" placeholder="Repeat your Password" id="password">
            <button type="submit" value="Sign In" class="enter">Enter</button>

            <div class="account-regist">
                <p class="mb-0">You have an account? <a href="{{route('login')}}" class="text-fw-bold">Login</a></p>
                </p>
            </div>
        </form>

    </div>
</div>

@endsection