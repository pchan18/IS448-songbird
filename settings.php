<?php 
session_start();
//checking of user is logged in. If not, redirect to login page.
if (isset($_SESSION['user']) == FALSE){
     header("Location: login.php");
} 
if (isset($_COOKIE["Backgroundcolor"])){
		echo "<style='background_color=" . $_COOKIE['Backgroundcolor'] . "'>"
		;
	}

?>
<!DOCTYPE html>
<!-- mypage.html first lab      -->
<html lang="en">
<head>
		<style>
		body {background-image:none;}
		</style>
		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<link rel="stylesheet" type="text/css" href="profile.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js"></script>
		<script src="settings.js"></script>
</head>

<body>

	<div class="navBar">
		<a href="home.html"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
		<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
		<button class="navBtn"><a class="nav" href="justreviews.php">REVIEW</a></button>
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="navBtn"><a class="nav" href="search.php">SEARCH</a></button>
		<button class="currentBtn">PROFILE</button>
	</div>

	<div class="sideHead">
		
		<h1>Profile</h1>
	</div>
	
	<div class="sideMain">
		<div class="user">
			<h2>User1234</h2>
			<span>Member since 10/10/10</span>
		</div>
		<img id="userImg"src="images/HackUMBC.Logo.Gold.png" width="200" height="200"> </br>
		<input type="button" value="Show" onclick="using_appear(userImg);" />
		<input type="button" value="Hide" onclick="using_switch_off(userImg);"/>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et convallis leo. 
				Phasellus eleifend hendrerit mi, nec tincidunt enim malesuada ornare. Sed commodo 
				urna enim, non interdum dolor dapibus quis.
		</p>
		
	</div>
	<div class="main">
	
		<h1><u> Settings </u></h1>
			<form name ="profile_pic" action = "settings.php" method = "POST">
			<label>
			Profile Picture:
			<input id="fileupload" type="text" name="profile_pic" value= "">
			</label>
			<br><br>
			<div style="border:1px solid black" id="show"></div>
			<br>
			<form name = "background_color" action = "settings.php" method = "POST">
			<label>
			Background Color:
			<input type="color" id="color" name="bgcolor"/>
			</label>
					<br><br><br>
			<form name = "text_color" action = "settings.php" method = "POST">
			<label>
				Text Color: 
				<input type="color" id="color2" name="txtcolor"/>
			</label>
				<br><br><br>
			<form name = "background_image" action = "settings.php" method = "POST">
			<label>
				Background Image: <select name = "bgimage" id = "backimg">
					<option></option>
					<option value = "cat"> Cat </option>
					<option value = "dog"> Dog </option>
					<option value = "flamingo"> Flamingo </option>
				</select>
			</label>
				<br><br><br>
			<form name = "font_type" action = "settings.php" method = "POST">
			<label>
				Font Type: <select name = "fonttype" id = "fnt_type">
					<option></option>
					<option value = "serif"> Serif </option>
					<option value = "arial"> Arial </option>
					<option value = "garamond"> Garamond </option>
				</select>
			</label>
			<br><br><br>
			<input type="button" id="submitButton" value="Show Available profile pics"/>
			<input type="button"  id="changeButton" value = "change"/>
	</div>
		
</body>

</html>
