@extends('Partials.guestr')
@section('content')
    <main class="mt-24  flex flex-col items-center ">
    	<div class="max-w-7xl w-full text-gray-800">
    		<h1 class="text-3xl font-extrabold">Hi there..</h1>
    		<p class="font-mono font-bold text-lg leading-loose mt-5">
    			Want to interact with people all over the globe?? <br>
    			Share from any part of world of the world what's going on at your side of the globe <br>
    			build a network of great Bloggers on your continent or worldwide 
    			<span class="italic">Darichat</span>'s Got You  
    		</p>

            <div class="mt-12 mr-64">
                <button class="bg-pink-700 animate-bounce font-extra py-3 px-6 rounded text-xl bold text-white hover:opacity-75">
                    <a href="{{route('register')}}">Sign Up for free</a>
                </button>
            </div>
    	</div>
    </main>
    <div class="mb-64"></div>
 @endsection