<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="submit.css"/>
<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
<title>Songbird Submit</title>
</head>

<body>
<div class="navBar">
<a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png" alt="White version of songbird logo" width="50" height = "50"></a>
<button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
<button class="navBtn"><a class="nav" href="review.php">REVIEW</a></button>
<button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
<button class="navBtn"><a class="nav" href="search.php">SEARCH</a></button>
<button class="navBtn"><a class="nav" href="profile.php">PROFILE</a></button>
</div>
<div class="container">
<h1>SUBMIT</h1>
<fieldset>
<legend>Share your thoughts</legend>
<form name="customForm" action="reviews.php" method="POST">
Album Cover
<br/>
<img id="logo" src="images/SONGBIRD-BLACK.png" alt ="White version of songbird logo as filler " width="200" height = "200" >
<br/>
<input type="submit" id="uploard file" value="Upload"/>
<br/>
<dl>
<dt>Album Title:</dt>
<dd><input type = "text" name="title" size = "50" /></dd>
<dt>Artist:</dt>
<dd><input type = "text" name="artist" size = "50" /></dd>
<dt>Writer </dt>
<dd><input type = "text" name="writer" size = "50" /></dd>
<dt>Year Released</dt>
<dd><input type = "text" name="release" size = "5" /></dd>
<dt>Rating</dt>
<dd><input type = "number" name="rating" size = "" /></dd>
<dt>Description</dt>
<dd><textarea rows="6" cols="50" name="description" id="comments">
Enter your review here
</textarea>
</dd>
<dt>Tags</dt><dd><input type = "text" name="tags" size = "50" /></dd>
</dl>
<input type="submit" id="submitButton" value="Submit"/>
</form>
</fieldset>
</div>
</body>
</html>
