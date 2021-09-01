<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //
    public function create(){
        return view('auth.login');
    }

    public function store(){

        if(Auth::attempt(request(['name','password'])) == false){
            return back()->withErrors([
                'message'=> 'el email o contraseña son incorrectos',

            ]);
        }
        return redirect()->to('/');

    }

    public function destroy(){
        Auth::logout();
        return redirect()->to('/login');
    }
}
