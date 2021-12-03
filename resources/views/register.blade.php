@extends('Partials.guest')
@section('content')
<div class="mt-20 flex flex-col items-center">
	<div class=" py-4 rounded-lg w-4/12">
	    <form action = "{{route('register')}}" method="post" class="flex flex-col items-center w-full" enctype="multipart/form-data">
	    	@csrf
	    	<input type="text" name="name" class="block w-full py-3 border-2 border-gray-100 px-2  mt-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200" placeholder="Enter full name" value="{{old('name')}}" >
            @error('name')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror
	    	<input type="text" name="username" class="block w-full py-3 border-2 border-gray-100 px-2  mt-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200" placeholder="Enter username" value="{{old('username')}}" >
            @error('username')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror

	    	<input type="email" name="email" class="block w-full py-3 border-2 border-gray-100 px-2  mt-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200" placeholder="Enter email" value="{{old('email')}}" >
             @error('email')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror

	    	<div class="w-full mt-2 ">
	    	<label class=" text-gray-500">Date of Birth</label>
	    	<input type="date" name="date_of_birth" class="block w-full py-3 border-2 border-gray-100 px-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200">
	    	</div>
            @error('date_of_birth')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror

	    	<input type="password" name="password" class="block w-full py-3  border border-gray-200 mt-2 px-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-100" placeholder="Enter password">
	    	@error('password')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror

	    	<input type="password" name="password_confirmation" class="block w-full py-3  border border-gray-200 mt-2 px-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-100" placeholder="Repeat password">

	    	<div class="w-full mt-2 ">
	    	<label class=" text-gray-500">Profile photo</label>
	    	<input type="file" name="profile_pic" class="block w-full py-3 border-2 border-gray-100 px-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200">
	    	</div>

	    	<button type="submit" class="bg-pink-700 transistion duration-300 ease-in-out transform hover:scale-105 mt-2 text-white py-3 px-4 text-lg text-bold rounded shadow-md ">Submit</button>
	    </form>
	</div>
</div>

@endsection