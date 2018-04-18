<?php 
 include ("connect.php");
 include ("sessions_user.php"); 
?>
<html>
	<head>
		<title>Vote</title>
	</head>

	<body>
	
	
	
		<form action="success.php" method="POST">
			
			<?php
			
				$theuser = $_SESSION['userlogin'];
				
				$sql2 = "select voted from logintable where name = '$theuser'";
				$result2 = mysqli_query($db, $sql2) or die ("Error");
				$row2 = mysqli_fetch_assoc($result2);
				
				if($row2['voted']==0)
				{
					$sql = "select name from candidate";
					$result = mysqli_query($db, $sql) or die ("Error");
				
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
				
				mysqli_close($db);
				
			?>
			
			<br>
		</form>
	
	</body>
</html>






