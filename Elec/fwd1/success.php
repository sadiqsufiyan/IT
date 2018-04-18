<html>
	<head>
		<title>Voted</title>

<style>

.logo{
  float: left;

}


.content {

  width:auto;
  text-align: left;
  height: 100%;
  background: #95a5a6;
  margin-left: 0px;
  
 background-image: url("black.jpg");
background-repeat:no-repeat;



}

.content p {
  color: #424242;
  font-size: 0.8em;
}
.logo{
  float: left;

}

img{
  width: 80%;
  height: 100%;
}

.logo a {
  font-size: 2.3em;
  color: #fff;
}
div#header {
  width: 100%;
  height: 20%;
  background-color: white;
  margin: 0 ;
}
div#container {
  height: 92%;
  width: 100%;
  margin-left: 3px;

}

</style>
	</head>

	<body>

<div id="header">
        <div class="logo">
          <img src="pre.png">
        <br>
</div>
    </div>
<br>
<div class="content">
	
		<?php include('session.php');
		
			$theuser = $_SESSION['theuser'];

			$cr = $_POST['cr'];
			
			$sql = "UPDATE candidate SET voted_count = voted_count + 1 WHERE name = '$cr'";
			$result = mysqli_query($conn, $sql) or die ("Error");
			
			$sql3 = "UPDATE logintable SET voted = 1 WHERE name = '$theuser'";
			$result3 = mysqli_query($conn, $sql3) or die ("Error");
		?>

		You have successfully voted!<br><br>

		Candidate Status:<br>
		
		<table>
			<?php				
				
				$sql2 = "select * from candidate";
				$result2 = mysqli_query($conn, $sql2) or die ("Error");
			
				while($row2 = mysqli_fetch_assoc($result2))
				{
					echo "<tr><td>".$row2['name']."</td><td>".$row2['voted_count']."</td></tr>";	
				}	
				
			?>	
		</table>
		<br>
		<a href="logout.php">Logout</a>	

	</body>
</html>






