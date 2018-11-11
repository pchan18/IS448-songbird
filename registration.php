<!DOCTYPE html>
<!-- Registration Page | Victor Cho -->
<html lang="en">
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Song Bird</title>
	<link rel="stylesheet" type="text/css" href="songbird.css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>
<body>
	
<ul>
<img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"/>
  <li><a href="home.php">HOME</a></li>
  <li><a href="review.php">REVIEW</a></li>
  <li><a href="submit.php">SUBMIT</a></li>
  <li><a href="search.php">SEARCH</a></li>
  <li><a href="profile.php">PROFILE</a></li>
</ul> 

<div class="border">
<h1>First, we need some information from you</h1>

<form name="register" id="register" action="registration_data.php" method="POST">
<p>First Name: <input type="text" name="fname" size="25" /></p>
<p>Last Name: <input type="text" name="lname" size="25" /></p>
<p>Email: <input type="text" name="email" size="25" /></p>
<p>Birthday: <input type="date" name="bday"/></p>
<p>New Password: <input type="password" name="pword1"/></p>
<p>Confirm Password: <input type="password" name="pword2"/></p>
<p>Screen Name: <input type="text" name="screen"/></p>
<p>Comments: <textarea rows="10" cols="50" name="comments" id="comments">Tell us about yourself</textarea></p>
<input type="submit" value="Submit" />
<p></p>
</form></div>

</body>
</html>
