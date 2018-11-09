<?php
if(isset($_COOKIE["user"]))
{
	$userName = $_COOKIE["user"];
    
}
else
{
	//redirects to login page when cookie not made
    header('Location: login.php');
        
}
?>
<!DOCTYPE html>
<!-- mypage.html first lab      -->
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
				Welcome <br/> <br/>
				This is Songbird! <br /> <br />
				Here you can rate albums from various artist and discover albums.<br /><br />
				Find your new favorite song, album, or artist.
				<!--Welcome <?php //echo getCookie['$userName'] ?> -->
			</p>
	
	</div>
	
	<div class="sideBar">
			<button class="sideBtn"><a class="side" href="review.php">REVIEW</a></button>
			<button class="sideBtn"><a class="side" href="submit.php">SUBMIT</a></button>
			<button class="sideBtn"><a class="side" href="search.php">SEARCH</a></button>
			<button class="sideBtn"><a class="side" href="profile.php">PROFILE</a></button>
	</div>
	
	<footer>
		<img id="footerLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="25" height = "25">
		<button class="footerBtn"><a class="footer" href="review.php"><span>REVIEW</span></a></button>
		<button class="footerBtn"><a class="footer" href="submit.php"><span>SUBMIT</span></a></button>
		<button class="footerBtn"><a class="footer" href="search.php"><span>SEARCH</span></a></button>
		<button class="footerBtn"><a class="footer" href="profile.php"><span>PROFILE</span></a></button>
	</footer>


</body>

</html>