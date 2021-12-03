@extends('Partials.auth')
@section('content')
<div class="mt-40">Dashboard</div>
<div class="flex flex-col items-center select-none ">

<div class="w-5/12 mb-8  bg-white  ">
	<form action="{{route('dashboard', auth()->user()->username)}}" method="get" class="w-full sticky top-64 flex  ">
	 <input type="text" name="search" class="block w-full py-3 border-2 border-gray-300 px-2   focus:outline-none focus:ring focus:bg-pink-100 focus:border-gray-200" placeholder="Enter full name" value="{{old('name')}}" >
            

	 <button type="submit" class="bg-pink-700 transistion duration-300 ease-in-out transform hover:scale-105 text-white py-3 px-4 text-lg text-bold rounded shadow-md ">Seach</button>   	
</form>
@error('search')
      <div class="text-red-700 text-xs">{{$message}}</div>
@enderror
</div>


	@foreach($posts as $post)
	<div class="w-8/12 h-56 mb-12">
		<div class=" w-full h-full">
		<div class="w-10/12 h-56 bg-white border border-gray-200 shadow-md p-2 rounded  text-gray-800 relative">
			<div class="flex ">
				<div><img src="{{asset('/storage/'.$post->preview)}}" class="w-40 h-48 "></div>
				<div class="flex flex-col ml-12">
					<h1 class="text-2xl font-extrabold mt-4 ">{{$post->title}}</h1>
					<div class="tracking-wide">{{$post->body}}</div>
				</div>
			</div>
			<div class="flex absolute top-1 right-2 ">
				<div class="flex ">
					<div onclick="myfunction()"><svg xmlns="http://www.w3.org/2000/svg"  class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg></div>
				<span>
					{{$post->created_at->diffForHumans()}}
				</span>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>	
			</div>
		    

			<button class="absolute bottom-2 right-2 bg-indigo-900 animate-pulse font-extra py-3 px-6 rounded text-xl bold text-indigo-100">
	             <a href="{{route('register')}}">Read article</a>
	        </button>
	   </div>
		<div id="menu" class="hidden absolute top-5 right-24 flex flex-col h-48 w-40 shadow-md bg-white px-2 py-3">
          <ul>
          	<li class="border-b-3 border-gray-200 mb-2">Edit</li>
          	<li class="border-b-3 border-gray-200 mb-2">Delete</li>
          	<li class="border-b-3 border-gray-200 mb-2">Post owner</li>
          </ul>
	    </div>
	</div>
	</div>	
	@endforeach


	<div>{{$posts->links()}}</div>
</div>
@endsection