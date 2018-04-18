
<?php
include("connect.php");
session_start();
if( isset($_POST['password']) && ($_POST['password']==$_POST['rewrite']))
{
  if (isset($_POST['username']) )
  {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
        $username = $_POST['username'];
	$useremail = $_POST['useremail'];
        $password = $_POST['password'];

      #  mail($useremail,"confirmation","ha ha ha ha ha") or die("email fail");

        $query = "insert into user(username,firstname,lastname,useremail,password) values('$username','$firstname','$lastname', '$useremail', '$password')";
        $result = mysqli_query($db,$query);
        if($result)
             echo "Congratulations you are now a user!! <a href='index.php'>click here to Login now</a>";
        else
             echo 'Registration Failed. Try again.';

 }
}
else
echo "Please re-write the correct password";
mysqli_close($db);
?>
