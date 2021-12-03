<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{     
    public function __construct(){
        $this->middleware(['guest']);
      }
       public function showLogin(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
        'username' => 'required',
         'password' => 'required',
        ]);

        if(auth()->attempt($request->only('username', 'password'))){
          $user = auth()->user()->username;  
        return redirect()->route('dashboard' , compact('user'));
        }else{
         return redirect()->back()->with('invalid','Sorry!! Login details are inccorrect');    
        }
    }
}
