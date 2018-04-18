<?php
$db = mysqli_connect('localhost', 'root', 'tiger');
if (!$db){
    die("Database Connection Failed".mysqli_error($db));
}
$select_db = mysqli_select_db($db, 'election');
if (!$select_db){
    die("Database Selection Failed".mysqli_error($db));
}
?>
