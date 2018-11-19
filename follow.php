<?php
//ADD your session code here

	session_start();
	
	if(!isset($_SESSION["user"])){
		
		header('Location: login.php'); 
		
	}
	else{
		$user = $_SESSION['user'];
	}
	
	if(isset($_COOKIE["search_user"]))
	{
		$search_user = $_COOKIE["search_user"];
	}
	else
	{
		setcookie("search_user","$_POST[user]", time()+86400);
		$search_user = $_POST["user"];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>

<body>

	<?php
		
		$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");

		if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
		
		$constructed_query = "INSERT INTO sb_followed (uname,followed_user) VALUES ('$search_user','$_SESSION[user]')";
			#Execute query
			$result = mysqli_query($db, $constructed_query);
			
			#if result object is not returned, then print an error and exit the PHP program
			if(! $result){
				print("Error - query could not be executed");
				$error = mysqli_error($db);
				print "<p> . $error . </p>";
				exit;
			}
	?>