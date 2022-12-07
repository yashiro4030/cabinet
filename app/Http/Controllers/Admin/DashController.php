<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

   
    public function logout()
    {

        auth()->logout();
        return redirect()->route('showlogin');
    }
}
