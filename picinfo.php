<?php
$myfile = fopen("settings.txt", "r") or die("Unable to open file!");
$show =  fread($myfile,filesize("settings.txt"));
fclose($myfile);

echo "$show";
?>
