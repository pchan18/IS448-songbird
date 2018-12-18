"use strict";
//Victor Cho IS448
//This is the JavaScript for validating form data in the registration page.

window.onload = pageLoad;
function pageLoad(){
  $("button").onclick= validate;
  $("uname").onblur = userCheck;
  $("email").onblur = emailCheck;
}

function validate() {
return (check1() && check2() && check3());
}

//Check if any forms are empty
function check1() { 

	var errormessage = "";
	
	if($('fname').value == "") {
		errormessage += "Enter your first name \n";
	}
	
	if($('lname').value == "") {
		errormessage += "Enter your last name \n";
	}
	
	if($('email').value == "") {
		errormessage += "Enter your email address \n";
	}
	
	if($('bday').value == "") {
		errormessage += "Enter your birthday \n";
	}
	
	if($('pw1').value == "") {
		errormessage += "Enter your password \n";
	}
	
	if($('pw2').value == "") {
		errormessage += "Enter your password confirmation \n";
	}

	if($('uname').value == "") {
		errormessage += "Enter your screen name \n";
	}

	if(errormessage != "") {
		alert(errormessage);
		return false;
	}
	else {
		return true;
	}
}

//Check Email Address
function check2() {
	
	var email = $('email').value;
	var pattern = /\w+[@]\w+/;
	var result = pattern.test(email);
	
	if (result==false) 
	{
		alert("Your email (" + email + ") is incorrect. It must have an @ symbol. Example: abc@gmail.com");
		$('email').style.borderColor = "red";
		$("email").select();
		return false;
	}
	else {
		return true;
	}
}

//check if passwords match
function check3(){
	var pword1 = $('pw1').value;
	var pword2 = $('pw2').value;
	
	if(pword1 !== pword2) {
		alert("Passwords do not match.");
		$('pw1').style.borderColor = "red";
		$('pw2').style.borderColor = "red";
		$("pw1").select();
		return false;
	} else {
		return true;
	}
}

//This ajax function uses registration_data2.php and checks the username availability
function userCheck(){
	var valueOfUsername = $("uname").value;
	
	new Ajax.Request("registration_data2.php", 
  { 
    method: "post", 
    parameters: {screen:valueOfUsername},
    onSuccess: displayResult
  } );
}

//This ajax function uses registration_data3.php and checks the email availability
function emailCheck(){
	var valueOfEmail = $("email").value;
	
	new Ajax.Request("registration_data3.php",
	{
	method: "post",
	parameters: {email:valueOfEmail},
	onSuccess: displayResult2
	} );
}

function displayResult(ajax){
	$("msgbox").innerHTML = ajax.responseText;
}

function displayResult2(ajax){
	$("msgbox2").innerHTML = ajax.responseText;
}