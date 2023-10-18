<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('login.index');

    }

    public function auth(Request $request)
    {
        $credencias = $request->validate([

        
            'email' => ['required','email'],
            'password' => ['required']
        ],
        [
        'email.required'=>'Campo e-mail é obrigatório',
        'email.email'=>'E-mail não é valido',
        'password.required' => 'Campo senha é obrigatório'

        ]);

        if (Auth::attempt($credencias)){
            $request -> session()->regenerate();
            return redirect()->route('funcionarios.index');
        } else {

        return redirect()->back()->with('erro','E-mail ou senha inválida');

        }
    }

}
