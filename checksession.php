<?php 

	session_start();
	
	if(!isset($_SESSION['user_name']))
	{
		header("Location:login.php?invalid=2");
	}
	if(!isset($_SESSION['pass']))
	{
		header("Location:login.php?invalid=2");
	}
?>
