<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller {
    public function index() {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if(Auth::user()->active) {
                return Redirect::route('activate');
            }
            return $next($request);
        });
        $user = Auth::user();
        if ($user != null) {
            Log::info($user["id"]);
            return view("userview", $user);
        } else {
             return view("errorview");
        }
    }
}
