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
		
		
</head>

<body>

	<div class="navBar">
		<a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
		<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
		<button class="navBtn"><a class="nav" href="review.php">REVIEW</a></button>
		<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
		<button class="currentBtn">SEARCH</button>
		<button class="navBtn"><a class="nav" href="profile.php">PROFILE</a></button>
		<button class="navBtn"><a class="nav" href="logout.php">LOGOUT</a></button>

	</div>
<br/><br/>
	<div class="sideHead">
		<h1>Search</h1>
	</div>
	
	<div >
	<form class="form" action="searchResults.php">
	<h1> Search  </h1>
	<h2>Seach by Title, Artist or User</h2>
	
		<input class="search" type="text" placeholder="Title" name="title"> <br/>
		
		<br/>
		<input class="search" type="text" placeholder="Artist" name="artist"><br/>
	
		<br/>
		<input class="search" type="text" placeholder="User" name="user">
		<br/><br /><br /><br />
		<button class="searchbtn"type="submit" name="submit"> Search</button>
		<br/>
	</form>
	</div>
	<br/>
	

	<div class="main">
	<br /><br /><br /><br /><br /><br /><br />
		<h1>Popular Title Searches</h1>
		<h2>Browse Popular Searches</h2>
		<br/>
		<a class="results" href="search_results.html" > 
		<img  src="images/pop.jpg" alt="pop" style="width:100px; height:100;"/> <br/> Pop</a>
		<a class="results" href="search_results.html">
		<img  src="images/hits.jpg" alt="hits" style="width:100px; height:100;"/> <br/>Today's Hit</a>
		<a class="results" href="search_results.html">
		<img  src="images/country.jpg" alt="country" style="width:100px; height:100;"/> <br/> Hot Country</a>
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
		<h1>Popular ArtistSearches</h1>
		<h2>Browse Popular Searches</h2>
		<img class="img" src="images/chainsmokers.jpg" alt="chainsmoker" Chainsmokers />
		<img class="img" src="images/pink.jpg" alt="pink"/>
		<img class="img" src="images/roses.png" alt="roses"/>
		<img class="img" src="images/coldplay.jpg" alt="coldplay"/>
	</div>
	

</body>

</html>
