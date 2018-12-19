<?php
header("Cache-Control: no-cache, must-revalidate");
 // Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

// Fill up array with names
$a[]="test";
$a[]="review";
$a[]="maria";
$a[]="data";
$a[]="music";
$a[]="artist";
$a[]="title";
$a[]="songbird";
$a[]="track";


//get the uname parameter from URL
$q=$_GET["title"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
{
  $hint="";
  for($i=0; $i<count($a); $i++)
  {
  if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
    {
    if ($hint=="")
      {
         $hint=$a[$i];
      }
    else
      {
         $hint=$hint." , ".$a[$i];
      }
    }
  }
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
{
   $response="no suggestion";
}
else
{
   $response=$hint;
}

//output the response
echo $response;
?>