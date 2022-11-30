@extends('base')

@section('content')

<div class="bloc-log-blur">
    <div class="text-blur">
        <p>Ah vous revoilà jeune aventurier ! <br />Les monstres continuent de rôder dans les alentours, terminer vôtre quête pour obtenir votre bourse bien remplie</p>
    </div>
</div>

<div class="login">
    <div class="form">
        <form action="/login" method="post">
            @csrf
            <div class="account-regist">
                <p class="mb-0">You don't have an account? <a href="{{route('register')}}" class="text-fw-bold">Sing in</a></p>
                </p>
            </div>
            <div class="position-log">
                <input class="login__input" type="text" placeholder="Username">
                <input class="login__input" type="password" placeholder="Password">
                <button type="submit" value="Sign In" class="submit">Login</button>
            </div>
        </form>
    </div>
</div>

@endsection