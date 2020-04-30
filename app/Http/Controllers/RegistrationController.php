<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Log;
use Mail;
use Illuminate\Support\Facades\Auth;
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
        $this->send();
        return redirect()->to('/');
//        return view('errorview');
    }
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'Web dev blog'], function ($message) {
            $user = Auth::user();
            $message->to($user["email"], "Hello, {$user['username']}")->subject('Welcome on GoodMovie');
            $message->from('csse1705@gmail.com', 'Goodmovie');
        });
    }
}
