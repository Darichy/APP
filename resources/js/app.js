require('./bootstrap');

function myFunction(){
	var element = document.getElementById("menu");
     if(element.style.display === "none"){
     	element.style.display = "block";
     }else{
     	element.style.display = "none";
     }
}
