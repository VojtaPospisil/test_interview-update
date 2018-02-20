<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function ShowLoginForm() {

    return view ('auth.admin_login');
    }

    public function Login(Request $request) {

        $request->validate([
        'email'     =>  'required|email',
        'password'  =>  'required|min:6',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect()->action('Admin\AdminProductController@index');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));

    }
}
