<?php
include"db.php";

$name=$_POST['name'];
$reason=$_POST['reason'];
$phone=$_POST['phone'];
$date=$_POST['social'];
$time=$_POST['time'];
$sql="UPDATE booking SET name='$name',  reason='$reason', phone='$phone', time='$time' WHERE date='$date'";

mysqli_query($link,$sql);

header('location:index.html');

 ?>
