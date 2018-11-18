
<!DOCTYPE html>
<!-- mypage.html first lab      -->
<html lang="en">
<head>

		<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<link rel="stylesheet" type="text/css" href="searchbar.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
</head>

<body>

	<div class="navBar">
		<a href="home.html"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
		<button class="navBtn"><a class="nav" href="home.html">HOME</a></button>
		<button class="navBtn"><a class="nav" href="review.html">REVIEW</a></button>
		<button class="navBtn"><a class="nav" href="submit.html">SUBMIT</a></button>
		<button class="currentBtn">SEARCH</button>
		<button class="navBtn"><a class="nav" href="profile.html">PROFILE</a></button>
		<button class="navBtn"><a class="nav" href="logout.php">LOGOUT</a></button>
	</div>

	<div class="sideHead">
		<h1 style="text-orientation: mixed" >Search</h1>

	</div>
	<form class="form" action="">
	<h1> <span style="background-color:black">Keyword Search </span> </h1>
		<input class="search" type="text" placeholder="Search" name="search">
		<button class="searchbtn"type="submit" name="submit"> Search</button>
	</form>
<div class="main">
	<h1> Search Results </h1>
		<table>
			<tr>
				<th>Artists</th>
				<th>Title</th>
				<th>Reviewer</th>
				<th>Rating</th>
			</tr>
			<tr>
				<td>Chainsmokers</td>
				<td>Memories: do not open</td> 
				<td> USER 1234 </td>
				<td> <img class="rating"  src="images/4stars.png"> </td>
			 </tr>
			
			<tr>
				<td>Chainsmokers</td>
				<td>Memories: do not open</td> 
				<td> USER 1234 </td>
				<td> <img class="rating" src="images/4stars.png"> </td>
			 </tr>
			<tr>
				<td>Chainsmokers</td>
				<td>Memories: do not open</td> 
				<td> USER 1234 </td>
				<td> <img class="rating"  src="images/4stars.png"> </td>
			 </tr>
			 <tr>
	
	</div>


</body>

</html>
