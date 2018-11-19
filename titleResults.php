
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
		<button class="navBtn"><a class="nav" href="review.php">REVIEW</a></button>
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="currentBtn">SEARCH</button>
		<button class="navBtn"><a class="nav" href="profile.php">PROFILE</a></button>
		<button class="navBtn"><a class="nav" href="logout.php">LOGOUT</a></button>
	</div>

	<div class="sideHead">
		<h1><a href="search.php">Search</a></h1>
	</div>
	<div class ="main">
	
<?php
//connect to database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");
if(!$db) exit("Error - could not select database");

?>
<button class="followBtn"><a href="follow.php"></a>Follow</button>
<?php

	$title = $_POST["title"];
	
	
	echo $title;
//changes from html
	$title = htmlspecialchars($_POST['title']); 
	
//prevent SQL injection
	$title= mysqli_real_escape_string($db,$title);
	
	
	
	if ((isset($_POST["title"]) && (!empty($_POST["title"])))) {
			
//todo: write and execute the query to select from table sb_review TITLE
	$selectTitle = "Select 'user_profile', 'title', 'artist' 
	FROM 'sb_review'
	WHERE 'title' LIKE '%$title%' ";

//execute query
	$result = mysql_query($db,$selectTitle);
	$num_rows = mysqli_num_rows($result);
	if($num_rows  > 0 ){
	while ($row=mysqli_fetch_array($result));
	{
		$titleName = $row['title'];
		$artistName = $row['artist'];
		$userName = $row['user_profile'];
	}
	?>
	
	<ul>
	<li> <?php $titleName ?></li>
	<li> <?php $artistName ?></li>
	<li> <?php $userName ?></li>
	</ul>
	
	<?php }
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