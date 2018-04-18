<?php include('config.php');
	
	session_start();
	
	if(!isset($_SESSION['theuser']))
	{
  	header("location:index.php");
  }

?>
