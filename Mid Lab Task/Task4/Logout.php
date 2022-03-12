<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:login.php");
	
}

else{
	header("location:login.php");
}

 ?>
© 2021 GitHub, Inc.