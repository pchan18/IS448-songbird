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

	$constructed_query = "SELECT title FROM `sb_review` WHERE user_profile = '$user'";
			
	#Execute query
	$result = mysqli_query($db, $constructed_query);
			
	#if result object is not returned, then print an error and exit the PHP program
	if(! $result){
		print("Error - query could not be executed");
		$error = mysqli_error($db);
		print "<p> . $error . </p>";
		exit;
	}
		
	$num_rows = mysqli_num_rows($result);
	$num_rows = mysqli_num_rows($result);
	$arr = mysqli_fetch_array($result);

	$q=$_GET["title"];
	
	for ($i = 0; $i < count($arr)-1; $i++) {
	
		if ($arr[$i] == $q)
		{
			$result = "You wrote a post about the song $q" ;
		}
		else{
			$result = "You have not written a post about the song $q";
		}
	}
//output the response
echo "$result";

?>