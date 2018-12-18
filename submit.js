"use strict";
// JavaScript Document
window.onload=pageLoad;
function pageLoad(){
	$("username").onblur=validateUsername;
}

//creating an Ajax request using Prototype
function validateUsername(){
  var username = $("username").value;
  new Ajax.Request( "avail.php", 
  { 
    method: "get", 
    parameters: {name:username},
    onSuccess: displayResult
  } );
}
//function to be executed when request is successful
function displayResult(ajax){
	var r = ajax.responseText;
	$('msgbox').innerHTML = r;
	
	if(r == 'Matches'){
		$('msgbox').style.backgroundColor="green";
		$('msgbox').style.color="white";
		$('msgbox').focus();
		
	}
	else{
		$('msgbox').style.backgroundColor="red";
		$('msgbox').style.color="white";	
	}
}

	
