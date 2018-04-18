<html>
	<head>
		<title>Vote</title>
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
  
 background-image: url("c2.jpg");
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
	<?php include('session.php'); ?>
	
		<form action="success.php" method="POST">
			
			<?php
			
				$theuser = $_SESSION['theuser'];
				
				$sql2 = "select voted from logintable where name = '$theuser'";
				$result2 = mysqli_query($conn, $sql2) or die ("Error");
				$row2 = mysqli_fetch_assoc($result2);
				
				if($row2['voted']==0)
				{
					$sql = "select name from candidate";
					$result = mysqli_query($conn, $sql) or die ("Error");
				
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<input type='radio' name='cr' value='".$row['name']."'> &nbsp;".$row['name']."<br>";
					}
					
					echo "<input type='submit' value='Vote'>";
				}
				
				else
				{
					echo "You have already voted";
				}
				
				mysqli_close($conn);
				
			?>
			
			<br>
		</form>
	</div>
	</body>
</html>






