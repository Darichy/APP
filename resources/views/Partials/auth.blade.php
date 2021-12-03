<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
   <!-- <script type="text/javascript" src="{{asset('/js/app.js')}}"></script> -->
	<title>Darichat.org</title>
</head>
<body class="relative">
  	@yield('content') 
</body>
  <header class="flex flex-col items-center shadow-lg fixed top-0 right-0 left-0 font-bold bg-white">
    	<div class="w-full h-full max-w-8xl md:px-12 flex justify-between  py-4">
    		<div class="text-pink-700 flex">
    		<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-12 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
			</svg>
    		<h2 class="font-bold text-2xl ">Darichat</h2>
    	</div>

    	<div class=" flex">
    		    <div class="mr-5" >
	    		    	<a href="{{route('post', auth()->user()->username)}}" class= "flex flex-col items-center text-pink-700">
	    		    	     <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
						     </svg>
	    		           <p>Post</p>
	    		      </a>
    		    </div>
	    		
    		   
				<form action="{{route('logout')}}" method="post">
					@csrf
					<button type="submit">
						 <div class="text-pink-700 flex flex-col items-center ">
				    			<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-12" fill="none" viewBox="0 0 24 24" stroke=" currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
								</svg>
					         <div class="text-sm font-bold">Logout</div>
			   
                   </div>
		         </button>
				</form>
            @if(auth()->user()->profile_pic)
				<a href="{{route('profile', auth()->user()->username)}}">
					<div class="ml-4">
				<img src="{{asset('/storage/'.auth()->user()->profile_pic)}}" class="w-12 h-12 rounded-full">
            </div>
				</a>
            @else
            <a href="{{route('profile')}}">
            	<div class="ml-4 w-12 h-12 bg-gray-200 rounded-full capitalize  text-white font-bold text-2xl  flex justify-center items-center">
            	<?php 
            	$string = auth()->user()->username;
               $first = $string[0];
               echo $first;
            	?>
            </div>
            </a>
            @endif
                </div>
	    		</div>
    	</div>
    	</div>
    </header>



       <footer class="flex flex-col items-center bg-pink-700 h-40  py-4" >
    	<div class="flex justify-around  text-gray-200 max-w-6xl w-full">
	    	<div class="w-3/12">
	    		Contact Us 
	    		<div class="flex">
	    			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-7 mr-5 hover:fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					</svg><span>:  +233 567 893 903</span>
	    		</div>
	    		Fax: jgahba
	    	</div>
	    	<div class="w-3/12">
	    		Copyright &copy 2022
	    	</div>
	    	<div class="w-3/12">
	    		More Info 
	  	</div>
	    	
    	</div>
    </footer>

    