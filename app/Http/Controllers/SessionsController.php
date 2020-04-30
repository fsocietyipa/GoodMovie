<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

//    public function store() {
//        if (auth()->attempt(request(['email', 'password'])) == false) {
//            return back()->withErrors([
//                'message' => 'The email or password is incorrect, please try again'
//            ]);
//        }
//
//        return redirect()->to('/userpage');
//    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

         if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == "Admin") {
                return redirect()->to('/userpage');
            }else{
                return redirect()->to('');
            }
            }else{
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
            }

        }

        // return redirect()->to('/userpage');


    public function destroy()
    {
        auth()->logout();
        session()->flush();
        return redirect()->to('/');
    }
}


