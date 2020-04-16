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
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['email', 'password']));

        auth()->login($user);

        return redirect()->to('/');
//        return view('errorview');
    }
}
