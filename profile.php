<?php
//ADD your session code here

	session_start();
	
	if(!isset($_SESSION["user"])){
		
		header('Location: login.php'); 
		
	}
	else{
		$user = $_SESSION['user'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<link rel="stylesheet" type="text/css" href="profile.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js"></script>
		<script src="profile.js" type="text/javascript"></script>


</head>

<body>

	<?php
		$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");

		if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");
	?>

	<div class="navBar">
		<a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
		<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
		<button class="navBtn"><a class="nav" href="justreviews.php">REVIEW</a></button>
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="navBtn"><a class="nav" href="search.php">SEARCH</a></button>
		<button class="currentBtn">PROFILE</button>
		<button class="navBtn"><a class="nav" href="logout.php"><span>LOGOUT</span></a></button>
	</div>

	<div class="sideHead">
		<h1>Profile</h1>
	</div>
	
	<div class="sideMain">
		<div class="user">
			<h2><?php print "User: $user";?></h2>
			
		</div>
		<img id="userImg"src="images/HackUMBC.Logo.Gold.png" width="200" height="200">
		<p>
		<?php
			$constructed_query = "SELECT * FROM `sb_user` WHERE uname = '$user'";
		
			#Execute query
			$result = mysqli_query($db, $constructed_query);
		
			#if result object is not returned, then print an error and exit the PHP program
			if(! $result){
				print("Error - query could not be executed");
				$error = mysqli_error($db);
				print "<p> . $error . </p>";
				exit;
			}
			$row_array = mysqli_fetch_array($result);
			
			//print("$row_array[bio]");
		?>
            Update Bio:<input type="text" id="bioText" value="Update your bio" />
            <button id="update">Update</button>
			
			<div style="border: 1px black solid;" id="bio">
            <!-- definition will appear here -->
			</div>
		
		</p>
		<button><a href="settings.php">Settings</a></button>
	</div>
	<div class="main">
	
		<h1><u>Your Post</u></h1>
			<p>
			
			Song Title:
            <input type="text" id="title" value="Enter the song title!" />
            <button id="lookup">Lookup</button>
			
			<div style="border: 1px black solid;" id="result">
            <!-- definition will appear here -->
			</div>
			
			<?php
				$constructed_query = "SELECT * FROM `sb_review` WHERE user_profile = '$user'";
			
				#Execute query
				$result = mysqli_query($db, $constructed_query);
			
				#if result object is not returned, then print an error and exit the PHP program
				if(! $result){
					print("Error - query could not be executed");
					$error = mysqli_error($db);
					print "<p> . $error . </p>";
					exit;
				}
				
				$num_rows = mysqli_num_rows($result);

				if($num_rows == 0)
				{
					print("You have not made any posts yet");
				}
				else{
					$row_array = mysqli_fetch_array($result);
					
					print("Song Title: $row_array[title] - ");
					print("Artist: $row_array[artist] <br \>");
					print("Post: $row_array[description]");
				}
			?>
			</p>
		<h1><u>Your Music: Drag to Order them!</u></h1>	
			<p>
				<?php
				$constructed_query = "SELECT * FROM `sb_followed` WHERE uname = '$user'";
			
				#Execute query
				$result = mysqli_query($db, $constructed_query);
			
				#if result object is not returned, then print an error and exit the PHP program
				if(! $result){
					print("Error - query could not be executed");
					$error = mysqli_error($db);
					print "<p> . $error . </p>";
					exit;
				}
				
				$num_rows = mysqli_num_rows($result);
				$row_array = mysqli_fetch_array($result);

				if($num_rows > 0)
				{
					?>
						<ol id="music">
						<?php
					for($row_num = 1; $row_num <= $num_rows; $row_num++){
						$row = mysqli_fetch_array($result);
						
						$follow_song = $row['followed_song'];
						$follow_artist = $row['followed_artist'];
						$follow_user = $row['followed_user'];
						
						if($follow_song != null){
						?>
							<li>Song: <?php echo $follow_song ?></li>
						<?php
						}
						else if($follow_artist !=null){
							?>
							<li>Artist: <?php echo $follow_artist ?></li>
						<?php
						}
						else if($follow_user !=null){
							?>
							<li>User: <?php echo $follow_user?></li>
						<?php
						}
					}
					?>
						</ol>
						<?php
					
				}
				else{
					
					print("You have not followed anything yet");			
					
				}
			?>
			</p>
	</div>
		
</body>

</html>
