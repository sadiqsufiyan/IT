<?php
include("connect.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 $username = mysqli_real_escape_string($db,$_POST['username']);
 $password = mysqli_real_escape_string($db,$_POST['password']);
 $query_select="select * from logintable";
 $select_result= mysqli_query($db,$query_select)
   or die ('error selecting');



 while ($row=mysqli_fetch_array($select_result))
 {
   if ($row['name']==$username)
   {
     if($row['password']==$password)
     {

$_SESSION["username"] = $row['name'];
       $_SESSION['userlogin'] = TRUE;
       header("location: votelist.php");
     }
     else
     {
header("location: index.html");
         $message = "Username or Password incorrect.";
  echo "<script type='text/javascript'>alert('$message');</script>";


     }
   }
 }
 }

 mysqli_close($db);
?>
