<?php
//ADD your session code here

	session_start();
	
	if(!isset($_SESSION["user"])){
		
		header('Location: login.php'); 
		
	}
	else{
		$user = $_SESSION['user'];
	}
?>
<!DOCTYPE html>
<!-- mypage.html first lab      -->
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<!--<link rel="stylesheet" type="text/css" href="home.css"/>-->
		<link rel="stylesheet" type="text/css" href="review.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>

<body>

	<div class="navBar">
		<a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
		<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
		<button class="currentBtn">REVIEW</button>	
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="navBtn"><a class="nav" href="search.php">SEARCH</a></button>
		<button class="navBtn"><a class="nav" href="profile.php">PROFILE</a></button>
	</div>
	
	<div class="sideHead">
		<h1>Review</h1>
	</div>
	
	<?php
	
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");

	if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");

	if ((isset($_POST['artist'])  && !empty($_POST['artist'])) && (isset($_POST['description'])  && !empty($_POST['description'])) && (isset($_POST['genre'])  && !empty($_POST['genre'])) && (isset($_POST['rating'])  && !empty($_POST['rating'])) &&(isset($_POST['tags'])  && !empty($_POST['tags'])) && (isset($_POST['title'])  && !empty($_POST['title'])) && (isset($_POST['user_profile'])  && !empty($_POST['user_profile'])) &&(isset($_POST['date_released'])  && !empty($_POST['date_released']))) 
	{
		$artist = htmlspecialchars($_POST['artist']);
		$description = htmlspecialchars($_POST['description']);
		$genre = htmlspecialchars($_POST['genre']);
		$rating = htmlspecialchars($_POST['rating']);
		$tags = htmlspecialchars($_POST['tags']);
		$title = htmlspecialchars($_POST['title']);
		$user_profile = htmlspecialchars($_POST['user_profile']);
		$date_released = htmlspecialchars($_POST['date_released']);
		
		$artist = mysqli_real_escape_string($db,$artist);
		$description = mysqli_real_escape_string($db,$description);
		$genre = mysqli_real_escape_string($db,$genre);
		$rating = mysqli_real_escape_string($db,$rating);
		$tags = mysqli_real_escape_string($db,$tags);
		$title = mysqli_real_escape_string($db,$title);
		$user_profile = mysqli_real_escape_string($db,$user_profile);
		$date_released = mysqli_real_escape_string($db,$date_released);
			
		$date_of_post = date("Y-m-d");
		
		$constructed_query = "INSERT INTO sb_review(user_profile, title, artist, date_released, description, rating, genre, date_of_post, tags) VALUES ('$user_profile', '$title', '$artist', '$date_released', '$description', '$rating', '$genre', '$date_of_post', '$tags')";
		
		$result = mysqli_query($db, $constructed_query);
		
		$retrieve_query = "SELECT * FROM sb_review";
		
	$result = mysqli_query($db, $retrieve_query);
	$num_rows = mysqli_num_rows($result);
		
	if($num_rows != 0)
	{
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

	} else {
		$statement ="Please fill out all the information in order to make a post.";
	}
		print ("$statement");
	
?>
	
	<a href="submit.php">Click here to make blog posts.</a>

</body>

</html>