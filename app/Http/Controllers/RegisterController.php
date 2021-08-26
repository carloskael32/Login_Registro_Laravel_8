<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //$user = User::create(request(['name', 'email', Hash::make('password')]));
         User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        
        return redirect()->to('/');

/*
        return User::create([
            'name' => $data['name'],
            'agencia'=>$data['agencia'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        */
    }
}
