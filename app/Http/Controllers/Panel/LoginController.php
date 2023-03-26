<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function HandleViewLogin(){
        return view('panel/pages/login');
    }
    public function HandleLoginAuth(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('panel');
        }
        return redirect()->back()->withInput();
    }
}
