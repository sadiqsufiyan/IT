<?php
session_start();
if(isset($_SESSION['userlogin'])!= TRUE)
{
  echo "<script type='text/javascript'>";
  echo "alert('Sorry! Cannot access this page');";
  echo "</script>";
  $URL="index.html";
  echo "<script> location.href='$URL'</script>";
}
?>
