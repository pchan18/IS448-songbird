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
		
		echo "<p>User wants to know about username $userName</p>";

		#construct a query
		#query should look like this: 
		#select * from cars where car_name='accord';


		$constructed_query = "SELECT * FROM `sb_user` WHERE uname = '$userName' AND pword = '$password'";
		
		#sanity check: print query to see if constructued query is correct
		print("<h3>Sanity check print statement:</h3> The query is: $constructed_query</br>");

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
		print("<h3> Sanity check print statement:</h3> 
			Number of rows returned for select query: $num_rows <br />");
		
		if ($num_rows == 0)
		{
			print("Sorry, your username and password are invalid");
		}
		else
		{
			###############################
			#redirect to home page
			header('Location: home.php'); 
		}
?>
		<!--if program reaches this print statement, it means the query worked-->
		<h3>Sanity check print statement:</h3> If this line is reached in the program, it means that the query worked
		<br />
		
		<?php
	
	}
	else{
		echo "You must enter a username";
		echo "Go back and do so!";
	}

	?>

</body>

</html>