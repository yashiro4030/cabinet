<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login()
    {

        return view('admin.login');
    }

    public function ValLog(LoginRequest $req)
    {

        if(auth()->guard('admin')->attempt(['username'=>$req->input('username'),'password'=>$req->Input('password')])) 
        {
            return redirect()->route('admin.dashboard'); // ligne ajoutee
            
        }
    }


}
