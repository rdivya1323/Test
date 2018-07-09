<?php
$link=mysqli_connect('localhost','root','','booking');
if(!$link){
echo''.mysqli_connect_error();
}
$db = new mysqli("localhost","root","","booking");
if($db->connect_error){
    echo "unable to connect";
}
?>
