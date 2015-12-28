<?php 


session_start();




$_SESSION["isLoggedin"] = false;
	echo "you are being logged out...";
  header("refresh:3; url=index.php" );

 ?>