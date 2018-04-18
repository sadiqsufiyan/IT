<?php include('config.php');
	
	session_start();

	if(isset($_POST['password']))
	{
		$username = $_POST['name'];
		$password = $_POST['password'];
	}
	
	$sql = "select password from logintable where name = '$username'";
	$result = mysqli_query($conn, $sql) or die ("Error");
	
	$row = mysqli_fetch_assoc($result);
	
	
	
	if($row['password']==$password)
	{
		$_SESSION['theuser'] = $username;
		header('Location:votelist.php');
	}
	else
	{
		header('Location:index.html');
	}

	mysqli_close($conn);

?>
