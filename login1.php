<?php
include("connect.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
 {

 $username = mysqli_real_escape_string($db,$_POST['username']);
 $password = mysqli_real_escape_string($db,$_POST['password']);
 $query_select="select * from user";
 $select_result= mysqli_query($db,$query_select)
   or die ('error selecting');


 $delete_query="select * from delete_user";
 $result=mysqli_query($db,$delete_query);
   while ($row=mysqli_fetch_array($result))
   {
     if ($row['deleted']==$username)
     {
       if($row['password']==$password)
       {
         echo "<script type='text/javascript'>
         alert('Account was deleted by the admin')</script>";

       }
     }
   }





 while ($row=mysqli_fetch_array($select_result))
 {
   if ($row['username']==$username)
   {
     if($row['password']==$password)
     {
       $_SESSION["username"] = $row['firstname'];
       $_SESSION['userlogin'] = TRUE;
       header("location: hpage.php");
     }
     else
     {

         $message = "Username or Password incorrect.";
  echo "<script type='text/javascript'>alert('$message');</script>";


     }
   }
 }
 }

 echo "INVALID USERNAME/PASSWORD!!You are not a member yet. Please <a href='signup.html'>click here to sign up</a>";
 mysqli_close($db);
?>
