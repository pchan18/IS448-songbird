<!DOCTYPE html>
<!-- Registration Data | Victor Cho -->
<html lang="EN">
  <head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Song Bird</title>
	<link rel="stylesheet" type="text/css" href="songbird.css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
  </head>
  <body>
<div class="border">
	<?php	

		$screen = $_POST["screen"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$pword1 = $_POST["pword1"];
		$pword2 = $_POST["pword2"];
		$bday = $_POST["bday"];		
		$bio = $_POST["bio"];

		//connect to mysql database
		$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");
		if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");

		//This message prints after all the checks have passed
		echo("Registration successful. Welcome, $screen! <br />");
		echo("Click <a href='login.php'> here </a> to log in.");

		//protecting against HTML injection
		$fname = htmlspecialchars($_POST["fname"]);
		$lname = htmlspecialchars($_POST["lname"]);
		$email = htmlspecialchars($_POST["email"]);
		$pword1 = htmlspecialchars($_POST["pword1"]);
		$pword2 = htmlspecialchars($_POST["pword2"]);
		$bday = htmlspecialchars($_POST["bday"]);		
		$screen = htmlspecialchars($_POST["screen"]);
		$bio = htmlspecialchars($_POST["bio"]);	

		//protecting against SQL injection
		$fname = mysqli_real_escape_string($db, $fname);
		$lname = mysqli_real_escape_string($db, $lname);
		$email = mysqli_real_escape_string($db, $email);
		$pword1 = mysqli_real_escape_string($db, $pword1);
		$pword2 = mysqli_real_escape_string($db, $pword2);
		$bday = mysqli_real_escape_string($db, $bday);
		$screen = mysqli_real_escape_string($db, $screen);
		$bio = mysqli_real_escape_string($db, $bio);
		
		//SQL query to INSERT
		$insert = "INSERT INTO sb_user (first_name, last_name, email, bday, pword, uname, bio)
		VALUES ('$fname','$lname','$email','$bday','$pword2','$screen','$bio')";
		
		//execute query
		$result = mysqli_query($db, $insert);
		
		#if result object is not returned, then print an error and exit the PHP program
		if(! $result){
			print("Error - insert could not be executed");
			$error = mysqli_error($db);
			print "<p> . $error . </p>";
			exit;
					}
		else {
			//sanity check: insert statement successful
			echo("<p>Your information has been uploaded to the database successfully.</p>");
		}
		?>
		</div>
	</body>
</html>
