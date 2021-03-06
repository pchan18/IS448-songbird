
<?php
//ADD your session code here

	session_start();
	
	if(!isset($_SESSION["user"])){
		
		header('Location: login.php'); 
		
	}
	else{
		$user = $_SESSION['user'];
	}
?><!DOCTYPE html>
<!-- mypage.html first lab      -->
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home_search.css"/>
		<link rel="stylesheet" type="text/css" href="searchbar.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
		<script type="text/javascript" src="search.js"> </script>
		
</head>

<body>

	<div class="navBar">
		<a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
		<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
		<button class="navBtn"><a class="nav" href="justreviews.php">REVIEW</a></button>
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="currentBtn">SEARCH</button>
		<button class="navBtn"><a class="nav" href="profile.php">PROFILE</a></button>
		<button class="navBtn"><a class="nav" href="logout.php">LOGOUT</a></button>

	</div>
<br/><br/>
	<div class="sideHead">
		<h1><a href="search.php">Search</a></h1>
	</div>
	
	<div >
	
	
	<hr>
	<form class="form" method ="POST" action="titleResults.php">
	<h1> Search  </h1>
	<h2 >Seach by Title</h2>
		<input class="search" id="title" type="text" placeholder="Title" name="title"> 
		<span id="msgbox"></span>
	<br/><br/><br />
	<input style="margin-left:8%; " placeholder="Suggested Searches" id="titleHint">
	<br/><br/>
		<button class="searchbtn" type="submit" name="submit"> Search</button>
		<br/>
	</form>
		<br/><br/><br/>
	<hr>
	
	<form class="form" method ="POST" action="artistResults.php">
	<h2>Seach by Artist</h2>
		<input class="search" type="text" placeholder="Artist" id="artist" name="artist">
		<span id="msgbox2"></span>
		<br/><br/><br />
	<input style="margin-left:8%; " placeholder="Suggested Searches" id="artistHint">
			<br/><br/>
		<button class="searchbtn" type="submit" name="submit"> Search</button>
		<br/><br/>

</div>
	</form>
	<br/>
	<hr>
	<form class="form" method ="POST" action="userResults.php">
	<h2>Seach by User</h2>
		<input class="search" type="text" placeholder="User" id="user"name="user">
		<span id="msgbox3"></span>
		<br/><br/><br />
		<input style="margin-left:8%;" placeholder="Suggested Searches" id="userHint">
			<br/><br/>
		<button class="searchbtn" type="submit" name="submit"> Search</button>
		<br/>

</div>
	</form>
	</div>
	<br/>
	

	<div class="main">
	<br /><br />
		<h1>Popular Title Searches</h1>
		<h2>Browse Popular Searches</h2>
		<br/>
		<a class="results" href="justreviews.php" > 
		<img  src="images/pop.jpg" alt="pop" style="width:100px; height:100;"/> <br/> Pop</a>
		<a class="results" href="justreviews.php">
		<img  src="images/hits.jpg" alt="hits" style="width:100px; height:100;"/> <br/>Today's Hit</a>
		<a class="results" href="justreviews.php">
		<img  src="images/country.jpg" alt="country" style="width:100px; height:100;"/> <br/> Hot Country</a>
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
		<h1>Popular Artist Searches</h1>
		<h2>Browse Popular Searches</h2>
		<img class="img" src="images/chainsmokers.jpg" alt="chainsmoker" Chainsmokers />
		<img class="img" src="images/pink.jpg" alt="pink"/>
		<img class="img" src="images/roses.png" alt="roses"/>
		<img class="img" src="images/coldplay.jpg" alt="coldplay"/>
	</div>
	

</body>

</html>
