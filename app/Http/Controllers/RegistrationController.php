<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'is_admin' => 'required'
        ]);

        $user = User::create(request(['username', 'email', 'password', 'is_admin']));

        auth()->login($user);

        return redirect()->to('/');
//        return view('errorview');
    }
}
