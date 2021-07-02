<?php
$hostname='localhost';
$username='root';
$password='';
$db_name='test';
$conn=mysqli_connect($hostname, $username, $password,$db_name);
if(!$conn){
    echo "fail";
}
else {
    echo "sucess";
}
?>