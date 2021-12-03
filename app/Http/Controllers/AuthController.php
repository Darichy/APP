<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AuthController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function showDashboard(Request $request){
        if($request->search){
            
            $posts = Post::where('body' , 'like', '%'.$request->search.'%')->orWhere('title' , 'like', '%'.$request->search.'%')->paginate(5);
        }else{
        $request->validate([
              'search'=>'required',
            ]);
        $posts = Post::paginate(5);
    }
        return view('dashboard',compact('posts'));
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('welcome');
    }
    
    public function showPost(){
        return view('post');
    }

    public function post(Request $request){
        $request->validate([
         'body' => 'required',
         'preview' => 'required',
        ]);

        $p = $request->file('preview');
        $path = $p->store('previews' , 'public');


        auth()->user()->post()->create([
          'title'=>$request->title,
          'body'=>$request->body,
          'preview'=>$path,
        ]);
        $user = auth()->user()->username;

        return redirect()->route('dashboard',compact('user'));

    }

    public function showProfile(){
        $user = auth()->user();
        $posts = auth()->user()->post;
         // dd($posts);
        return view('profile' , compact('user' , 'posts'));
    }
}
