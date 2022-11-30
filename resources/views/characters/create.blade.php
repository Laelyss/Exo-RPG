@extends('base')

@section('content')
<h1 id="see_character">Your character</h1>

<div class="form-create">

    <form id="formcreate" method="POST" action="{{route('characters/store')}}">
        @csrf
        <div>
            <label for="name">Nom</label>
            <input type="text" name="pseudo" id="pseudo" class="form-control" @error('pseudo') is-invalid @enderror placeholder="nom du personnage" />
            @error('pseudo')<div class="invalid-feedback">{{ $message }}</div>@enderror>
        </div>

        <div>
            <label for="level">Niveau</label>
            <input type="number" name="level" id="level" placeholder="son level">
        </div>

        <div>
            <label for="pv">Pv</label>
            <input type="number" name="pv" id="pv" placeholder="ses">
        </div>

        <div>
            <label for="magic">Magie</label>
            <input type="number" name="magic" id="magic" placeholder="sa magie">
        </div>

        <div>
            <label for="power">Force</label>
            <input type="number" name="power" id="power" placeholder="force">
        </div>

        <div>
            <label for="agitlity">Agility</label>
            <input type="number" name="agitlity" id="agitlity" placeholder="son agitlity">
        </div>

        <div>
            <label for="intelect">Intelect</label>
            <input type="number" name="intelect" id="intelect" placeholder="son intelect">
        </div>

        <div>
            <label for="class">Classe</label>
            <select name="class" id="class">
                <option value="assassin">Assassin</option>
                <option value="archer">Archer</option>
                <option value="berserker">Berserker</option>
                <option value="druid">Druide</option>
                <option value="warrior">Guerrier</option>
                <option value="mage">Mage</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection