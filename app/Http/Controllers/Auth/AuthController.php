<?php

namespace TheNetwork\Http\Controllers\Auth;

use TheNetwork\User;
use TheNetwork\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{

    use AuthenticatesUsers;


    public function __construct()
    {
        $this->redirectAfterLogout = route('auth.login');
        $this->redirectTo = route('backend.dashboard');

        $this->middleware('guest', ['except' => 'logout']);
    }

   
}
p