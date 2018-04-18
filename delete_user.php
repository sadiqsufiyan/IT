<?php
include("connect.php");
$id = $_GET['id'];
$name=$_GET['username'];
$pass=$_GET['pass'];
$query1="insert into delete_user values('$id','$name','$pass')";
$delete ="delete from user where id='$id'";
mysqli_query($db,$query1)or die("user table");
mysqli_query($db,$delete) or die("delete table");
header("location:musers.php");
 ?>
