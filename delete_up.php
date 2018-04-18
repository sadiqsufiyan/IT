<?php
include ("connect.php");
$id=$_GET['id'];
$name=$_GET['filename'];
$delete="delete from events where id='$id'";
mysqli_query($db, $delete);
unlink ("Events11/".$name);
header("location: Upcmg_evnts.php");

?>
$ss = "Events11/Firefox_wallpaper.png";
unlink ($ss);
