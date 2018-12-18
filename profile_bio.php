<?php

	session_start();
	
	if(!isset($_SESSION["user"])){
		
		header('Location: login.php'); 
		
	}
	else{
		$user = $_SESSION['user'];
	}

$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");
if(!$db) exit("Error - could not select database");

	$q=$_GET["bio"];

	$constructed_query = "UPDATE sb_user SET bio = '$q' WHERE uname = '$user'";
			
	#Execute query
	$result = mysqli_query($db, $constructed_query);
			
	#if result object is not returned, then print an error and exit the PHP program
	if(! $result){
		print("Error - query could not be executed");
		$error = mysqli_error($db);
		print "<p> . $error . </p>";
		exit;
	}
	
//output the response
echo "Bio: $q";

?>