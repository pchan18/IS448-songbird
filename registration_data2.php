<?php
$db = mysqli_connect("studentdb-maria.gl.umbc.edu","mrobe1","mrobe1","mrobe1");
if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");


$query = "SELECT uname FROM sb_user";
$result = mysqli_query($db, $query);
$unameArray = array();

$index = 0;
while($row = mysqli_fetch_array($result)){
	$unameArray[$index] = $row['uname'];
	$index++;
}

$q=$_POST["screen"];

if (in_array($q,$unameArray)) 
{
	$response="Username Exists.";
}
else{
	$response = "Available!";
}
echo $response;

?>