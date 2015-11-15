<?php
//local
$mysqli = new mysqli('localhost', 'root', 'Jade7369!', 'ju655443');
//sulley
//$mysqli = new mysqli('sulley.cah.ucf.edu', 'ju655443', 'Jade7369!', 'ju655443');  

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>