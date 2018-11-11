
<!DOCTYPE html>
<!-- mypage.html first lab      -->
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<link rel="stylesheet" type="text/css" href="login.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>

<body>

	<div class="body">
		<div class="head">
			<h1>LOGIN</h1>
		</div>
		<form name="register" id="register" 
			action="login_data.php" method="POST">
			<dl>
				<dt>Username:</dt>
				<dd>
					<input type="text" name="userName" id="userName" />
				</dd>
				<br />
				<dt>Password:</dt>
				<dd>
					<input type="password" name="password" id="password" />
				</dd>
			</dl>
			<p></p>
			<input type="submit" value="Submit" />
			<br/>
			<input type="button" value="Create an Account" 
			onclick="window.location.href='registration.php'" />
		</form>
	</div>

</body>

</html>
