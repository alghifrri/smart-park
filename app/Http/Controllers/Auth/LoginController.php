<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    // Mengganti metode redirectTo untuk mengarahkan berdasarkan role pengguna
    protected function redirectTo()
{
    $role = auth()->user()->role;

    switch ($role) {
        case 'Admin':
            return '/admin/dashboard';
            
        case 'Kasir':
            return '/kasir/dashboard';
            
        case 'Pengguna':
            return '/pengguna/dashboard';
            
        default:
            return '/dashboard';
    }
}

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


}