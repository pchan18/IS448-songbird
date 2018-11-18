<?php 
session_start();
//checking of user is logged in. If not, redirect to login page.
if (isset($_SESSION['user']) == FALSE){
     header("Location: login.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>

<body>

	<div class="header">
			<a href="home.php"><img id="headLogo" src="images/SONGBIRD-BLACK.png" alt="Black version of songbird logo" width="150" height = "150"></a>
			<p>
				<b style="color:#F4AA29;">Welcome <?php echo $_SESSION['user']; ?></b><br/> <br/>
				This is Songbird! <br /> <br />
				Here you can rate albums from various artist and discover albums.<br /><br />
				Find your new favorite song, album, or artist. <br /><br />
			</p>
	
	</div>
	
	<div class="sideBar">
			<button class="sideBtn"><a class="side" href="justreviews.php">REVIEW</a></button>
			<button class="sideBtn"><a class="side" href="submit.php">SUBMIT</a></button>
			<button class="sideBtn"><a class="side" href="search.php">SEARCH</a></button>
			<button class="sideBtn"><a class="side" href="profile.php">PROFILE</a></button>
			<button class="sideBtn"><a class="side" href="logout.php">LOGOUT</a></button>
	</div>
	
	<footer>
		<img id="footerLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="25" height = "25">
		<button class="footerBtn"><a class="footer" href="justreviews.php"><span>REVIEW</span></a></button>
		<button class="footerBtn"><a class="footer" href="submit.php"><span>SUBMIT</span></a></button>
		<button class="footerBtn"><a class="footer" href="search.php"><span>SEARCH</span></a></button>
		<button class="footerBtn"><a class="footer" href="profile.php"><span>PROFILE</span></a></button>
		<button class="footerBtn"><a class="footer" href="logout.php"><span>LOGOUT</span></a></button>
	</footer>

</body>

</html>
