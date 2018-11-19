<?php
//ADD your session code here

	session_start();
	
	if(!isset($_SESSION["user"])){
		
		header('Location: login.php'); 
		
	}
	else{
		$user = $_SESSION['user'];
	}
	
	//cookies
	
	if(isset($_COOKIE["search_user"]))
	{
		setcookie("search_user","$_POST[user]", time()+86400);
		$search_user = $_COOKIE["search_user"];
	}
	else
	{
		setcookie("search_user","$_POST[user]", time()+86400);
		$search_user = $_POST["user"];
	}
?>
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home_search.css"/>
		<link rel="stylesheet" type="text/css" href="searchbar.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">

	<body>

	<div class="navBar">
		<a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
		<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
		<button class="navBtn"><a class="nav" href="justreviews.php">REVIEW</a></button>
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="currentBtn">SEARCH</button>
		<button class="navBtn"><a class="nav" href="profile.php">PROFILE</a></button>
		<button class="navBtn"><a class="nav" href="logout.php">LOGOUT</a></button>
	</div>

	<div class="sideHead">
		<h1><a href="search.php">Search</a></h1>
	</div>
<div class="main" style="margin-top: 5%; margin-left:10%;">

	
<?php
//connect to database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");
if(!$db) exit("Error - could not select database");

?>
<button class="followBtn"><a class="follow" href="follow_user.php">Follow</a></button>
<?php

	
	$user = $_POST["user"];

//changes from html

	$user= htmlspecialchars($_POST['user']); 
	
//prevent SQL injection
	
	$user= mysqli_real_escape_string($db,$user);	
	
	if ((isset($_POST["user"]) && (!empty($_POST["user"])))) {
			
//todo: write and execute the query to select from table sb_review TITLE
	$constructed_query = "SELECT * FROM `sb_followed` WHERE uname = '$user'";
	
	$constructed_query = "Select * FROM `sb_review`	WHERE user_profile LIKE '%$user%'";

//execute query
	$result = mysqli_query($db,$constructed_query);
	
	if(! $result){
					print("Error - query could not be executed");
					$error = mysqli_error($db);
					print "<p> . $error . </p>";
					exit;
				}
				
	$num_rows = mysqli_num_rows($result);
	echo("There are $num_rows search results for $user. <br \>");
	if($num_rows > 0 ){
		for($row_num = 1; $row_num <= $num_rows; $row_num++){
		$row = mysqli_fetch_array($result);
		
		echo ("User's Name: $row[user_profile] <br \>");
		echo ("Song Title: $row[title] <br \>");
		echo ("Artist Name: $row[artist] <br \> <hr>");
		
		}
	 }
	else {
		echo "no results";
	}
	}
	else {
	?> 
	No search requested. Please seach by title, artist or user

	<?php
	}
	
	?> 
	
	</div>
	
</body>

</html>
