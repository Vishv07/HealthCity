<?php
	include "connection.php";      // Not compalsory....
	session_start();
	unset($_SESSION['log']);
	session_destroy();
	header("location:sign_up.php");
?>