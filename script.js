function setCookie(cname,cvalue,exdays){

    var d = new Date(); //Create an date object
	var expires = "expires=" + 365*1000*60*60*24;
	window.document.cookie = "backgroundcolor=black;" + expires;
}


function process(){
		alert("Hi");
		
		//document.cookie = "Backgroundcolor", "white", time()+3600, "/","", 0;
		//document.cookie = "Textcolor", "black", time()+3600, "/","", 0; 

		var color=document.getElementById("color").value;
		document.body.style.backgroundColor=color;
		
		var txtcolor=document.getElementById("color2").value;
		document.body.style.color=txtcolor;
	
		//$_COOKIE[Backgroundcolor] = document.getElementById("color").value;
		//$_COOKIE[Textcolor] = document.getElementById("color2").value;
		
		//alert(document.cookie);
}

