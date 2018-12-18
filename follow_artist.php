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
	
	if(isset($_COOKIE["search_artist"]))
	{
		setcookie("search_artist","$_POST[artist]", time()+86400);
		$search_artist = $_COOKIE["search_artist"];
	}
	else
	{
		setcookie("search_artist","$_POST[artist]", time()+86400);
		$search_artist = $_POST["artist"];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<link rel="stylesheet" type="text/css" href="searchbar.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
		<script type = "text/javascript" src = "follow.js"></script>
</head>

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
	<div class="main">

	<?php
		
		$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");

		if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
		
		$constructed_query = "SELECT * FROM sb_followed WHERE followed_artist = '$search_artist'";
		
		$result = mysqli_query($db, $constructed_query);
		
		if(! $result){
				print("Error - query could not be executed");
				$error = mysqli_error($db);
				print "<p> . $error . </p>";
				exit;
			}
			
		$num_rows = mysqli_num_rows($result);
		
		if ($num_rows != 0)
		{
			?>
				<span id="theText" style =
                "position: absolute; left:500px; top: 0px; 
                 font: bold 20pt 'Times Roman';">You are already following <?php print($search_artist)?></span>
			<?php
		}
		else{
		
		$constructed_query = "INSERT INTO sb_followed (uname,followed_artist) VALUES ('$_SESSION[user]','$search_artist')";
			#Execute query
			$result = mysqli_query($db, $constructed_query);
			
			#if result object is not returned, then print an error and exit the PHP program
			if(! $result){
				print("Error - query could not be executed");
				$error = mysqli_error($db);
				print "<p> . $error . </p>";
				exit;
			}
			?>
				<span id="theText" style =
                "position: absolute; left: 500px; top: 0px; 
                 font: bold 20pt 'Times Roman';">Successfully followed <?php print($search_artist)?></span>
				<?php
		}
	?>
	</div>
	</body>
	</html>