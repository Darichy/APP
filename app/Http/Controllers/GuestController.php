<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class GuestController extends Controller
{
    public function __construct(){
      $this->middleware(['guest']);
    }

    public function index(){
        return view('home');
    }

 


    public function showRegister(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
         'name' => 'required',
         'username' => 'required|unique:users',
         'email' => 'required|email|unique:users',
         'date_of_birth' => 'required',
         'password' => 'required|confirmed',

        ]);
        $pp = $request->file('profile_pic');
        $path = $pp->store('profiles' , 'public');


        User::create([
          'name'=>$request->name,
          'username'=>$request->username,
          'email'=>$request->email,
          'date_of_birth'=>$request->date_of_birth,
          'password'=>Hash::make($request->password),
          'profile_pic'=>$path,
        ]);



        return redirect()->route('login')->with('success', 'You have successfully registered your Darichat account , you can log in now');
    }
}
