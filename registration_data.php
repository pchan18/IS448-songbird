<!DOCTYPE html>
<html lang="EN">
  <head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Song Bird</title>
	<link rel="stylesheet" type="text/css" href="songbird.css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
  </head>
  <body>
	<?php	
		if ((isset($_POST["fname"]) && (!empty($_POST["fname"]))) &&
			(isset($_POST["lname"]) && (!empty($_POST["lname"]))) &&
			(isset($_POST["email"]) && (!empty($_POST["email"]))) &&
			(isset($_POST["bday"]) && (!empty($_POST["bday"]))) &&
			(isset($_POST["pword1"]) && (!empty($_POST["pword1"]))) &&
			(isset($_POST["pword2"]) && (!empty($_POST["pword2"]))) &&			
			(isset($_POST["screen"]) && (!empty($_POST["screen"]))) &&
			(isset($_POST["comments"]) && (!empty($_POST["comments"]))) 
			)
		{
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$pword1 = $_POST["pword1"];
			$pword2 = $_POST["pword2"];
			$bday = $_POST["bday"];		
			$screen = $_POST["screen"];
			$comments = $_POST["comments"];

		}
		else{
			echo "<p>You haven't entered all information in the form.
			Please go back and re-enter</p>.";
			return;
		}
		//checking that there is an @ in the email address
		if(preg_match("/\w+[@]\w+/", $email)) {
			
		}
		else {
			echo "<p> You have not entered email address in correct form. It is either empty or is missing the @ symbol </p>"; 
			return;
		}
		//checking that both passwords match
		if($_POST['pword1'] != $_POST['pword2'])
		{
			echo('Passwords do not match!');
			return;
		}
		echo("Registration successful. Welcome, $screen!");
		?>
	</body>
</html>