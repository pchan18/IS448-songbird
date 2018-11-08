<?php
//Note: Setting a cookie MUST occur before any other HTML code is processed/printed by the PHP code
//if cookie by the name 'user' is set, then retrieve the name of user from cookie
//and print welcome message
if(isset($_COOKIE["user"]))
{
	$userName = $_COOKIE["user"];
    
}
//else, if cookie is not set, it means the user is a first time visitor. 
//so, set the cookie and print a welcome message
else
{
    setcookie("user","$userName", time()+86400);
    $userName = 'guest';
        
}
?>
<!DOCTYPE html>
<!-- mypage.html first lab      -->
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>

<body>

	<?php
		$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");

	if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");

	#get the parameter from the HTML form that this PHP program is connected to
	#since data from the form is sent by the HTTP POST action, use the $_POST array here
	if ((isset($_POST["userName"]) && (!empty($_POST["userName"]))) &&
			(isset($_POST["password"]) && (!empty($_POST["password"])))
			)
	{
		$userName = htmlspecialchars($_POST['userName']);
		$password = htmlspecialchars($_POST['password']);
		
		$userName = mysqli_real_escape_string($db, $userName);
		$password = mysqli_real_escape_string($db, $password);

		#construct a query
		#query should look like this: 
		#select * from cars where car_name='accord';

		$constructed_query = "SELECT * FROM `sb_user` WHERE uname = '$userName' AND pword = '$password'";
		
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
		
		if ($num_rows == 0)
		{
			print("<p>Sorry, your username and password are invalid</p>");
			print("<p>Please ");
			?><a href="login.php">go back</a>
			<?php 
			print(" and re-enter your information</p>");
		}
		else
		{
			###############################
			#redirect to home page
			setcookie("user","$userName", time()+86400);
			$userName = 'guest';
			header('Location: home.php'); 
		}
	
	}
	else{
		echo "You did not fill your information correctly";
		print("<p>Please ");
			?><a href="login.php">go back</a>
			<?php 
			print(" and re-enter your information</p>");
	}

	?>

</body>

</html>