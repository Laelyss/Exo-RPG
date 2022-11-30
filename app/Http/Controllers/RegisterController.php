<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\Users;

class RegisterController extends Controller
{

    public function regist()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('rpg.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = Users::Create($request->validated());
        return redirect('/login')->with('sucess', 'Account created');
    }
}
