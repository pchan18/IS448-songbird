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
	<div class="sideBar">
			<button class="sideBtn"><a class="side" href="login.php">LOGIN</a></button>
	</div>
<div class="border">
<h1>First, we need some information from you</h1>

<form name="register" id="register" action="registration_data.php" method="POST">
<p>First Name: <input type="text" name="fname" style="margin-left:72px;"/></p>
<p>Last Name: <input type="text" name="lname" style="margin-left:75px;"/></p>
<p>Email: <input type="text" name="email" style="margin-left:115px;"/></p>
<p>Birthday: <input type="date" name="bday" style="margin-left:70px;"/></p>
<p>New Password: <input type="password" name="pword1" style="margin-left:46px;"/></p>
<p>Confirm Password: <input type="password" name="pword2" style="margin-left:20px;"/></p>
<p>Screen Name: <input type="text" name="screen" style="margin-left:57px;"/></p>
<p>Bio: <textarea rows="10" cols="50" name="bio" id="bio">Tell us about yourself</textarea></p>
<input type="submit" value="Submit" />
<p></p>
</form></div>

</body>
</html>
