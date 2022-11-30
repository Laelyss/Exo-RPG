@extends('base')

@section('content')

<h1 id="see_characters">Characters</h1>
<span class="little_text">HERE ARE THE LAST CHARACTERS, CHOOSE ONE</span>

<ul>
    @foreach ($list as $key => $character)
    <li>
        <p>Nom: {{$characters->pseudo}}</p>
        <p>Niveau: {{$characters->level}}</p>
        <p>Classe: {{$characters->class}}</p>
        <p>Pv: {{$characters->pv}}</p>
        <p>Agility: {{$characters->agility}}</p>
        <p>Power: {{$characters->power}}</p>
        <p>Intelect: {{$characters->intelect}}</p>
        <p>Magic: {{$characters->magic}}</p>

    </li>
    @endforeach
</ul>


@endsection