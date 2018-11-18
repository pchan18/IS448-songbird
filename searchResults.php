
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
		<button class="navBtn"><a class="nav" href="logout.php"><span>LOGOUT</span></a></button>
	</div>

	<div class="sideHead">
		<h1><a href= https://swe.umbc.edu/~mrobe1/is448/project/search.php>Search</a></h1>
	</div>
	<div class="main">
	
<?php
//connect to database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");
if(!$db) exit("Error - could not select database");

?>

<?php

	
//changes from html
	$title = htmlspecialchars($_POST['title']); 
	$artist = htmlspecialchars($_POST['artist']); 
	$user= htmlspecialchars($_POST['user']); 
	
//prevent SQL injection
	$title= mysqli_real_escape_string($db,$title);
	$artist = mysqli_real_escape_string($db,$artist);
	$user= mysqli_real_escape_string($db,$user);
	
	
	if ((isset($_POST["title"]) && (!empty($_POST["title"])))) {
			
	//todo: write and execute the query to select from table sb_review TITLE
	$selectTitle = "Select * FROM 'sb_review' WHERE 'title' LIKE '%$title%'";
	//execute query
	$resultTitle = mysql_query($db,$selectTitle);
	print $resultTitle;
	
	if(mysql_num_rows($resultTitle) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
	
	
                echo "<p><h3>".$results['title']."</h3></p>";
			}
	}
	}
	
	elseif	((isset($_POST["artist"]) && (!empty($_POST["artist"])))){
	//todo: write and execute the query to select from table sb_review ARTIST
	$selectArtist = "Select * FROM 'sb_review' WHERE 'artist' LIKE '%$artist%'";
	$resultArtist = mysql_query($db,$selectArtist);
	}
		
	elseif ((isset($_POST["user"]) && (!empty($_POST["user"])))){
	//todo: write and execute the query to select from table sb_review USER
	$selectUser= "Select * FROM 'sb_review' WHERE 'user' LIKE '%$user%'";
	$resultUser = mysql_query($db,$selectUser);
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