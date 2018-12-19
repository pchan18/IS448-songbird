"use strict";

window.onload=pageLoad;

function pageLoad(){
	document.getElementById("artist").onkeydown=upper;
	document.getElementById("title").onkeydown=upper;
	document.getElementById("user").onkeydown=upper;
	
	document.getElementById("artist").onblur=validateArtist;
	document.getElementById("title").onblur=validateTitle;
	document.getElementById("user").onblur=validateUser;
	
	document.getElementById("artist").onkeyup=completeartist;
	document.getElementById("title").onkeyup=completetitle;
	document.getElementById("user").onkeyup=completeuser;
	
}



function validateTitle(){
	var title= $('title').value;
	var pattern = /([A-Z])\w+/;
	var result = pattern.test(title);
	if($('title').value == "") {
	document.getElementById('msgbox').innerHTML="cannot search empty field";
		$('msgbox').style.backgroundColor="red";
		$('msgbox').style.color="white";
		$('msgbox').focus();
		
	}
	else{
	document.getElementById('msgbox').innerHTML="valid search";
		$('msgbox').style.backgroundColor="green";
		$('msgbox').style.color="white";	
	}
}
		

function validateArtist(){

	var artist= $('artist').value;
	var pattern = /([A-Z])\w+/;
	var result = pattern.test(artist);
	if($('artist').value == "") {
	document.getElementById('msgbox2').innerHTML="cannot search empty field";

		$('msgbox2').style.backgroundColor="red";
		$('msgbox2').style.color="white";
		$('msgbox2').focus();
		
	}
	else{
	document.getElementById('msgbox2').innerHTML="valid search";
		$('msgbox2').style.backgroundColor="green";
		$('msgbox2').style.color="white";	
	}
}

function validateUser(){
	var user= $('user').value;
	var pattern = /([A-Z])\w+/;
	var result = pattern.test(user);
	if($('user').value == "") {
	document.getElementById('msgbox3').innerHTML="cannot search empty field";
		$('msgbox3').style.backgroundColor="red";
		$('msgbox3').style.color="white";
		$('msgbox3').focus();
		
	}
	else{
		document.getElementById('msgbox3').innerHTML="valid search";
		$('msgbox3').style.backgroundColor="green";
		$('msgbox3').style.color="white";	
	}
	}

function upper(){
  var x = document.getElementById("artist");
  var y = document.getElementById("title");
  var z = document.getElementById("user");
  x.value = x.value.toUpperCase();
  y.value = y.value.toUpperCase();
  z.value = z.value.toUpperCase();
}

function completetitle(){
  var inputString = $("title").value;
  if (inputString.length==0)
  { 
     $("titleHint").innerHTML="";
     return;
  }
  
  new Ajax.Request( "titleComplete.php", 
  { 
    method: "get", 
    parameters: {title:inputString},
    onSuccess: ajaxSuccessTitle
  } );
}

function ajaxSuccessTitle(ajax){
	$("titleHint").value=ajax.responseText;
}

//function to execute when ajax request is unsuccessful
function ajaxFailure(){
	alert("Ajax request failed");
}


////////////////////////////////////////////////////////////////////

function completeartist(){
  var inputString = $("artist").value;
  if (inputString.length==0)
  { 
     $("artistHint").innerHTML="";
     return;
  }
  
  new Ajax.Request( "artistComplete.php", 
  { 
    method: "get", 
    parameters: {art:inputString},
    onSuccess: ajaxSuccessArtist
  } );
}
// ARTIST function to execute when ajax request is successful
function ajaxSuccessArtist(ajax){
	$("artistHint").value=ajax.responseText;
}
//function to execute when ajax request is unsuccessful
function ajaxFailure(){
	alert("Ajax request failed");
}

/////////////////////////////////////////////////////////////////////////////////
function completeuser(){
  var inputString = $("user").value;
  if (inputString.length==0)
  { 
     $("userHint").innerHTML="";
     return;
  }
  
  new Ajax.Request( "userComplete.php", 
  { 
    method: "get", 
    parameters: {user:inputString},
    onSuccess: ajaxSuccessUser
  } );
}

function ajaxSuccessUser(ajax){
	$("userHint").value=ajax.responseText;
}
//function to execute when ajax request is unsuccessful
function ajaxFailure(){
	alert("Ajax request failed");
}
