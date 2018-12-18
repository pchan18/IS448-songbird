<!DOCTYPE html>
<!-- Registration Page | Victor Cho -->
<html lang="en">
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Song Bird</title>
	<link rel="stylesheet" type="text/css" href="songbird.css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
	<script type = "text/javascript"  src = "registration.js" ></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
</head>
<body>
	<div class="sideBar">
			<button class="sideBtn"><a class="side" href="login.php">LOGIN</a></button>
	</div>
<div class="border">
<h1>First, we need some information from you</h1>

<form name="register" id="register" action="registration_data.php" method="POST">
<p>First Name: <input type="text" name="fname" style="margin-left:72px;" id="fname"/></p>
<p>Last Name: <input type="text" name="lname" style="margin-left:75px;" id="lname"/></p>
<p>Email: <input type="text" name="email" style="margin-left:115px;" id="email"/> <span id="msgbox2"></span></p>
<p>Birthday: <input type="date" name="bday" style="margin-left:70px;" id="bday"/></p>
<p>New Password: <input type="password" name="pword1" style="margin-left:46px;" id="pw1"/></p>
<p>Confirm Password: <input type="password" name="pword2" style="margin-left:20px;" id="pw2"/></p>
<p>Screen Name: <input type="text" name="screen" style="margin-left:57px;" id="uname"/> <span id="msgbox"></span> </p>
<p>Bio: <textarea rows="10" cols="50" name="bio" id="bio" placeholder ="Tell us about yourself"></textarea></p>
<input type="submit" value="Submit" id="button"/>
<p></p>
</form></div>

</body>
</html>
