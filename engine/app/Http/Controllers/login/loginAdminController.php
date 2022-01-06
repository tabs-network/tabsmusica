<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class loginAdminController extends Controller
{
    public function showLoginForm()
    {
        if(Auth::guard('admin')->check())
        {
            return redirect()->route('admin.dashboard.index');
        }
        else
        {
            return view('login.loginAdmin.showLoginForm');
        }
        return view('login.loginAdmin.showLoginForm');
    }

    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard.index');
        }
        else
        {
            return redirect()->route('login.loginAdmin.showLoginForm')->with('error', 'Wrong password or email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.loginAdmin.showLoginForm');
    }
}
