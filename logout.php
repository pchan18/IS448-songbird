<?php
setcookie("user" , 'userName' , time()-50000, '/');
header("Location: login.php");
exit;
?>