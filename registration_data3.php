<?php
//Victor Cho IS448
//This php code is executed when the emailCheck function event is triggered in registration.js
$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");
if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");


$query = "SELECT email FROM sb_user";
$result = mysqli_query($db, $query);
$unameArray = array();

$index = 0;
while($row = mysqli_fetch_array($result)){
	$unameArray[$index] = $row['email'];
	$index++;
}

$q=$_POST["email"];

if (in_array($q,$unameArray)) 
{
	$response="Email Exists.";
}
else{
	$response = "Available!";
}
echo $response;

?>