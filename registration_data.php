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

		//Checks if username is taken
		$checkifuserexists = 'SELECT uname FROM sb_user WHERE uname = "' . $screen . '" LIMIT 1';
		$result2 = mysqli_query($db,$checkifuserexists);
		$numresult = mysqli_num_rows($result2);

		if($numresult > 0){
		echo "The username you entered already exists. <a href='registration.php'> Click here </a> to enter a different one.";
		die();
		}
		else{
		}

		//Checks if email is taken
		$checkifemailexists = 'SELECT email FROM sb_user WHERE email = "' . $email . '" LIMIT 1';
		$result2 = mysqli_query($db,$checkifemailexists);
		$numresult = mysqli_num_rows($result2);

		if($numresult > 0){
		echo "The email you entered already exists. <a href='registration.php'> Click here </a> to enter a different one.";
		die();
		}
		else{
		}

		if ((isset($_POST["fname"]) && (!empty($_POST["fname"]))) &&
			(isset($_POST["lname"]) && (!empty($_POST["lname"]))) &&
			(isset($_POST["email"]) && (!empty($_POST["email"]))) &&
			(isset($_POST["bday"]) && (!empty($_POST["bday"]))) &&
			(isset($_POST["pword1"]) && (!empty($_POST["pword1"]))) &&
			(isset($_POST["pword2"]) && (!empty($_POST["pword2"]))) &&			
			(isset($_POST["screen"]) && (!empty($_POST["screen"]))) &&
			(isset($_POST["bio"]) && (!empty($_POST["bio"]))) 
			) 
		{
		}
		else{
			echo "<p>You haven't entered all information in the form.
			<a href='registration.php'> Click here </a> to go back.</p>";
			return;
		}
		//checking that there is an @ in the email address
		if(preg_match("/\w+[@]\w+/", $email)) {
			
		}
		else {
			echo "<p> You have not entered email address in correct form. It is either empty or is missing the @ symbol. <a href='registration.php'> Click here </a> to enter a different one. </p>"; 
			return;
		}
		//checking that both passwords match
		if($_POST['pword1'] != $_POST['pword2'])
		{
			echo("Passwords do not match! <a href='registration.php'> Click here </a> to try again.");
			return;
		}
		//This message prints if all checks have passed
		echo("Registration successful. Welcome, $screen!");
		
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
