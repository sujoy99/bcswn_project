<?php
    session_start();
	session_destroy();
	setcookie(PHPSESSID,$_SESSION['MOBILE'],time()-1);
	header("Location: index.php");
?>