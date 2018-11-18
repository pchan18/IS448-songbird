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
		<link rel="stylesheet" type="text/css" href="home.css"/>
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
		print ("did you get here?");
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
	};
		
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
		
		print ("<b>$row_array[0]</b><br/><br/>");
		print ("$row_array[1]<br/><br/>");
		print ("$row_array[2]<br/><br/>");
		print ("$row_array[3]<br/><br/>");
		print ("$row_array[4]<br/><br/>");
		print ("$row_array[5]<br/><br/>");
		print ("$row_array[6]<br/><br/>");
		print ("$row_array[7]<br/><br/>");
		print ("&nbsp;&nbsp; tags: $row_array[8]<br/>");
				
	?>
	</p>
	<?php
		};
		
	};


?>
	
	<a href="create_post.html">Click here to make blog posts.</a>
<!--
	
	
	
	<div class="main">
		<h1><u>Chainsmokers - Do Not Open An Honest Review</u></h1>
		<img class="img" src="images/chainsmokers.jpg" width="200" height="200">
<br/>		
		<p class="p">

		
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, 
		nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec 
		congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis 
		sed ornare eu, lobortis in odio. Praesent convallis 
		urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...
		</p>
		<br/>
		<p class="p">A review by: <a class="link" href="profile">User</a>
			<br/>
			Tags:
			<br/>
			Rating: ⋆⋆⋆⋆
		</p>
		<h1><u>Comment</u></h1>
			<p>
			<form class="form" name="comment" id="form" action="">
			<textarea class="" rows="4" cols="50" placeholder="Leave a Comment" name="comment"></textarea>
			<br />
			<button type="submit" value="Submit">Submit</button>
			</p>
			
		</form>
	</div>
		-->
</body>

</html>