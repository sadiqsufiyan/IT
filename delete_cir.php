<?php
include ("connect.php");
$id=$_GET['id'];
$name=$_GET['filename'];
$delete="delete from circular where id='$id'";
mysqli_query($db, $delete);
unlink("Circulars/".$name);
header("location: Acircular.php");

?>
$ss = "Events11/Firefox_wallpaper.png";
unlink ($ss);
