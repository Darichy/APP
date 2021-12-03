@extends('Partials.guest')
@section('content')
<div class="mt-40 flex flex-col items-center">
	<div class=" py-4 rounded-lg w-4/12">
		@if(session('invalid'))
		<div class="bg-red-100 text-red-700 text-sm py-2 mb-2 rounded px-2 tracking-wider">
			{{session('invalid')}}
		</div>
		@endif
	    <form action = "{{route('login')}}" method="post" class="flex flex-col items-center w-full">
	    	@csrf
	    	<input type="text" name="username" class="block w-full py-3 border-2 border-gray-200 px-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200 @error('username')border-red-700 border @enderror" placeholder="Enter username" >
	    	@error('username')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror
	    	<input type="password" name="password" class="block w-full py-3  border border-gray-200 mt-12 px-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-100 @error('username')border-red-700 border @enderror" placeholder="Enter password">
	    	@error('password')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror
	    	<button type="submit" class="bg-pink-700 transistion duration-300 ease-in-out transform hover:scale-105 mt-12 text-white py-3 px-4 text-lg text-bold rounded shadow-md ">Login</button>
	    	<div class="mt-5">
	    		Do not have an account?? <span class="italic text-pink-700 underline text-bold"> <a href="{{route('register')}}">Register here</a> </span>
	    	</div>
	    </form>	
	</div>
</div>


@endsection