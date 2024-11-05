<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        
        // if (
        //     $this->guard()->user()->hasRole('secretary') || 
        //     $this->guard()->user()->hasRole('director') ||
        //     $this->guard()->user()->hasRole('shareholder')
        // ) {
           
            return '/home';
        // }
        // if ($this->guard()->user()->hasRole('super-admin')) {
        //     return '/admin/dashboard';
        // }
    }
}
