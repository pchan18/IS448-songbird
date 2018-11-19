<!--Verifying user is logged in-->
<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header('Location: login.php'); 
	}
	else{
		$user = $_SESSION['user'];
	}
?>
<!DOCTYPE html>
<!--shows reviews | Marc Lazaga-->
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="review.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>

<body>
	<!-- Nav Bar -->
	<div class="navBar">
		<a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
		<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
		<button class="currentBtn">REVIEW</button>	
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="navBtn"><a class="nav" href="search.php">SEARCH</a></button>
		<button class="navBtn"><a class="nav" href="profile.php">PROFILE</a></button>
		<button class="navBtn"><a class="nav" href="logout.php"><span>LOGOUT</span></a></button>
	</div>
	
	<div class="sideHead">
		<h1>Review</h1>
	</div>
	
	<?php
	// Connecting to database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");
	if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
	
	//gathering data from database to php file
	$retrieve_query = "SELECT * FROM sb_review";
	$result = mysqli_query($db, $retrieve_query);
	
	//checking to make sure that select statement did not return empty
	$num_rows = mysqli_num_rows($result);
		
	if($num_rows != 0)
	{
		//printing data from table
		while($row_array = mysqli_fetch_array($result))
		{
	?>
	
	<p class=post>
	<?php
		print ("User <b>$row_array[0]</b> wrote a review: <br/>");
		print ("Album: <b>$row_array[1]</b> ");
		print ("Artist: <b>$row_array[2]</b><br/>");
		print ("Release Date: <b>$row_array[3]</b><br/>");
		print ("Review: <br/><br/>$row_array[4]<br/><br/>");
		print ("Rating: <b>$row_array[5]</b> ");
		print ("Genre: <b>$row_array[6]</b><br/>");
		print ("Review created on: <b>$row_array[7]</b><br/>");
		print ("&nbsp;&nbsp; tags: <b>$row_array[8]</b><br/>");
				
	?>
	</p>
	<?php
		};
		
	};


?>
	<!--Returns back to the submit a review page-->
	<a href="submit.php">Click here to make blog posts.</a>

</body>

</html>