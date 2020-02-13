<?php
$hostname="localhost";
$username="root";
$password="";
$db="register";
$con= mysqli_connect($hostname,$username,$password,$db);
  // you could test connection eventually using a if and else conditional statement,
  // feel free to take out the code below once you see Connected!
  if ($con) {
    echo "Connected!";
  } else {
    echo "Connection Failed";
  }
?>
