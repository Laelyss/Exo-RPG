<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{ // ici jaffiche formulaire vide
    //pas de parametre touche pas
    public function log()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('rpg.login');
    }

    //ici je vais le remplir et evoier vers base de doneee
    // si je appel ma base je suis obliger de mettre de paramaitres dans ma function si non ca marche pas
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)) {
            return redirect()->to('/login')->withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user)
    {
        return redirect('/home');
    }
}
