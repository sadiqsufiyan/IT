<html>
	<head>
		<title>Voted</title>
	</head>

	<body>
	
		<?php include('session.php');
		
			$theuser = $_SESSION['theuser'];

			$cr = $_POST['cr'];
			
			$sql = "UPDATE candidate SET vote_count = vote_count + 1 WHERE name = '$cr'";
			$result = mysqli_query($conn, $sql) or die ("Error");
			
			$sql3 = "UPDATE login SET voted = 1 WHERE name = '$theuser'";
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
					echo "<tr><td>".$row2['name']."</td><td>".$row2['vote_count']."</td></tr>";	
				}	
				
			?>	
		</table>
		<br>
		<a href="logout.php">Logout</a>	

	</body>
</html>






