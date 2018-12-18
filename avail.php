<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header('Location: login.php'); 
	}
	else{
		$user = $_SESSION['user'];
	}

// Fill up array with names
//Program extracts parameter-value from query and looks to see if value is already in the array
//if value is already in array, program echoes 'taken' as the response
//if value does not exist in array, program echoes 'available' as the response


#retrieve value of parameter by name 'username' and store the value in the local variable $q
$q=$_GET["name"];

if ($q===$user) 
{
	$message="Matches";
}
else{
	$message = "Does not match current user";
}
echo $message;

