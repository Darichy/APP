@extends('Partials.auth')
@section('content')
<div class="mt-40 flex flex-col items-center">
	<div class=" py-4 rounded-lg w-4/12">
	    <form action = "{{route('post',auth()->user()->username)}}" method="post" class="flex flex-col items-center w-full" enctype="multipart/form-data">
	    	@csrf
	    	<input type="text" name="title" class="block w-full py-3 border-2 border-gray-100 px-2  mt-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200" placeholder="Enter post title" value="{{old('title')}}" >
            
	    	<textarea col=50 row=5 name="body" class="block w-full py-3 border-2 border-gray-100 px-2  mt-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200" placeholder="Enter post details" >{{old('body')}}</textarea>
            @error('body')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror


	    	<div class="w-full mt-2 ">
	    	<label class=" text-gray-500">Post preview</label>
	    	<input type="file" name="preview" class="block w-full py-3 border-2 border-gray-100 px-2 focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200">
	    	</div>
	    	@error('preview')
             <div class="text-red-700 text-xs">{{$message}}</div>
	    	@enderror

	    	<button type="submit" class="select-none bg-pink-700 transistion duration-300 ease-in-out transform hover:scale-105 mt-2 text-white py-3 px-4 text-lg text-bold rounded shadow-md ">Post</button>
	    </form>
	</div>
</div>
@endsection