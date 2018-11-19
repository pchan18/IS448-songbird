<?php
//Logout | Victor Cho
session_start();
session_destroy();
header('Location: login.php');
?>
