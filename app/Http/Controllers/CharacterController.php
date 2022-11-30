<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;


class CharacterController extends Controller
{
    public function create()
    {
        return view('characters.create');
    }

    public function store(Request $request)
    {

        $newCharacter = Character::create([
            "user_id" => 1,
            "pseudo" => $request->input("pseudo"),
            "level" => $request->input("level"),
            "class" => $request->input("class"),
            "agility" => $request->input("agility"),
            "power" => $request->input("power"),
            "intelect" => $request->input("intelect"),

        ]);

        return view('home', ["character" => $newCharacter]);
    }

    public function index()
    {
        $list = Character::all();

        return view('characters.home', ["list" => $list]);
    }
}
