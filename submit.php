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

<!doctype html>
<!-- Submit a review page | Marc Lazaga -->
<html>

<head>
<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="submit.css"/>
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<title>Songbird Submit</title>
</head>

<body>
	
	<!-- Navigation Bar -->
	<div class="navBar">
	<a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png" alt="White version of songbird logo" width="50" height = "50"></a>
		<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
		<button class="navBtn"><a class="nav" href="justreviews.php">REVIEW</a></button>
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="navBtn"><a class="nav" href="search.php">SEARCH</a></button>
		<button class="navBtn"><a class="nav" href="profile.php">PROFILE</a></button>
		<button class="navBtn"><a class="nav" href="logout.php"><span>LOGOUT</span></a></button>
	</div>
	
	<!-- Form with required information needed to make a review -->
	<div class="container">
		<h1>SUBMIT</h1>
			<fieldset>
			<legend>Share your thoughts</legend>
			<form name="customForm" action="review.php" method="POST">
				<!-- implemented through ajax -->
				Album Cover
					<br/>
						<img id="logo" src="images/SONGBIRD-BLACK.png" alt ="White version of songbird logo as filler " width="200" height = "200" >
						<br/>
						<input type="submit" id="upload file" value="Upload"/>
					<br/>
				<dl>
					<!-- input username | text value-->
					<dt>User: </dt>
						<dd><input type = "text" name="user_profile" placeholder="Username" size = "50" /></dd>
					<!-- input album title | text value -->
					<dt>Album Title: </dt>
						<dd><input type = "text" name="title" placeholder="Album Title" size = "50" /></dd>
					<!-- input artist | text value -->
					<dt>Artist: </dt>
						<dd><input type = "text" name="artist" placeholder="Artist" size = "50" /></dd>
					<!-- input genre | text value -->
					<dt>Genre: </dt>
						<dd><input type = "text" name="genre" placeholder="Genre" size = "50" /></dd>
					<!-- input date released of album | date value -->
					<dt>Date Released: </dt>
						<dd><input type = "date" name="date_released"/></dd>
					<!-- input rating must choose from given options ranging 1-5 | number value -->
					<dt>Rating: </dt>
						<dd><select name="rating">
							<option value=1>1</option>
							<option value=2>2</option>
							<option value=3>3</option>
							<option value=4>4</option>
							<option value=5>5</option>
							</select>
						</dd>
					<!-- input desctiption | text value -->
					<dt>Description:</dt>
						<dd>
							<textarea rows="6" cols="50" name="description" placeholder="Enter your review here" id="comments"></textarea>
						</dd>
					<!-- input tags | text value -->
					<dt>Tags</dt>
						<dd><input type = "text" name="tags" placeholder="tags" size = "50" /></dd>
				</dl>
				<input type="submit" id="submitButton" value="Submit"/>
			</form>
			</fieldset>
	</div>
</body>
</html>


