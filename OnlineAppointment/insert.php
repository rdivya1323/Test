<?php

include"db.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$reason=$_POST['reason'];
$date=$_POST['social'];
$time=$_POST['time'];

$query="INSERT INTO booking ( name, phone, reason, date, time) VALUES ( '$name', '$phone', '$reason', '$date', '$time')";
 $a=mysqli_query($link,$query);
if(!$a){
 echo"failed";
}
else 
header("location:index.html");

?>