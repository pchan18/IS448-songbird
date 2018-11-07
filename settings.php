<!DOCTYPE html>
<!-- mypage.html first lab      -->
<html lang="en">
<head>
  <style>
  body {background-image:none;}
  </style>
  <meta http-equiv="Content-Type" content = "text/html; charset=utf-8"/>
        <title>Song Bird</title>
  <link rel="stylesheet" type="text/css" href="home.css"/>
  <link rel="stylesheet" type="text/css" href="profile.css"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body>
 <div class="navBar">
  <a href="home.php"><img id="navLogo" src="images/SONGBIRD-WHITE.png"  alt ="White version of songbird logo" width="35" height = "35"></a>
  <button class="navBtn"><a class="nav" href="home.php">HOME</a></button>
  <button class="navBtn"><a class="nav" href="review.php">REVIEW</a></button>
  <button class="navBtn"><a class="nav" href="submit.php">SUBMIT</a></button>
  <button class="navBtn"><a class="nav" href="search.php">SEARCH</a></button>
  <button class="currentBtn">PROFILE</button>
 </div>
 <div class="sideHead">
  
  <h1>Profile</h1>
 </div>
 
 <div class="sideMain">
  <div class="user">
   <h2>User1234</h2>
   <span>Member since 10/10/10</span>
  </div>
  <img id="userImg"src="images/HackUMBC.Logo.Gold.png" width="200" height="200">
  <p>
   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et convallis leo. 
    Phasellus eleifend hendrerit mi, nec tincidunt enim malesuada ornare. Sed commodo 
    urna enim, non interdum dolor dapibus quis.
  </p>
  
 </div>
 <div class="main">
 
  <h1><u> Settings </u></h1>
   <form name ="profile_pic" action = "profile.php" method = "POST">
   <label>
   Profile Picture:
   <input id="fileupload" type="file" name="profile_pic">
   </label>
   <br><br><br>
   <label>
   Background Color:
   <input type="color" id="color" name="bgcolor"/>
   </label>
     <br><br><br>
   <label>
    Text Color: 
    <input type="color" id="color" name="txtcolor"/>
   </label>
    <br><br><br>
   <label>
    Background Image: <select name = "bgimage">
     <option value = "cat"> Cat </option>
     <option value = "dog"> Dog </option>
     <option value = "flamingo"> Flamingo </option>
    </select>
   </label>
    <br><br><br>
   <label>
    Font Type: <select name = "fonttype">
     <option value = "serif"> Serif </option>
     <option value = "arial"> Arial </option>
     <option value = "garamond"> Garamond </option>
    </select>
   </label>
   <br><br><br>
   <input type="submit" value="Apply" />
   <!-- <input type="button" value = "change" onclick="process()"/> -->
 </div>
  
</body>
</html>