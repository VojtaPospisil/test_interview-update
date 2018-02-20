<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class AdminCustomerController extends Controller
{
    public function __construct() {

        $this->middleware('auth:admin');
    }

    public function get_user() {

        $users = User::all();

        return view('admin.customers',['users' => $users]);
    }
}
