"use strict";
//Victor Cho IS448
//This is the JavaScript for validating form data in the registration page.

window.onload = pageLoad;
function pageLoad(){
  $("button").onclick= validate;
  $("uname").onkeyup = userCheck;
  $("email").onkeyup = emailCheck;
}

function validate() {
return (check1() && checkName() && check2() && check3() && check4());
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
		errormessage += "Confirm your password \n";
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

//Check first and last name
function checkName() {
	var firstName = $("fname").value;
	var lastName = $("lname").value;
	var Pattern = /^[a-zA-Z]+$/;
	var fnResult = Pattern.test(firstName);
	var lnResult = Pattern.test(lastName);
	
	if (fnResult==false) 
	{
	alert("Your first name (" + firstName + ") can only contain letters.");
	$("fname").select();
	$('fname').style.borderColor = "red";
	return false;
	} 
	else {
		if (lnResult==false)
	{
	alert("Your last name (" + lastName + ") can only contain letters.");
	$("lname").select();
	$("lname").style.borderColor = "red";
	return false;
	} 
	else {
		return true;
	}
		}
}

//Check Email Address
function check2() {
	
	var email = $('email').value;
	var pattern = /\w+[@]\w+/;
	var result = pattern.test(email);
	var availability = $('msgbox2').innerHTML;
	var availabilityStr = "Email Exists.";
	
	if (result==false) 
	{
		alert("Your email (" + email + ") is incorrect. It must have an @ symbol. Example: abc@gmail.com");
		$('email').style.borderColor = "red";
		$("email").select();
		return false;
	}
	else {
		if (availability.toString() == availabilityStr.toString())
	{
		alert("Please enter a different email.");
		$('email').style.borderColor = "red";
		$("email").select();
		return false;
	}
	else {
		return true;
	}
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

//prevent user from registering with a duplicate username
function check4(){
	var uname = $('uname').value; 
	var availability = $('msgbox').innerHTML;
	var availabilityStr = "Username Exists.";
	
	if (availability.toString() == availabilityStr.toString())
	{
		alert("Please enter a different username.");
		$('uname').style.borderColor = "red";
		$("uname").select();
		return false;
	}
	else {
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
