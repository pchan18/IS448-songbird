function setCookie(){
	
	document.cookie = "Backgroundcolor", "white", time()+3600, "/","", 0;
	document.cookie = "Textcolor", "black", time()+3600, "/","", 0; 
}

function die(){
	
}

function process(){

		var color=document.getElementById("color").value;
		document.body.style.backgroundColor=color;
		
		var txtcolor=document.getElementById("color2").value;
		document.body.style.color=txtcolor;
	
		$_COOKIE[Backgroundcolor] = document.getElementById("color").value;
		$_COOKIE[Textcolor] = document.getElementById("color2").value;
}
