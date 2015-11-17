<?php
 $currency = '&#36;'; //Currency Character or code
    $shipping_cost      = 5.89; //shipping cost
    $taxes              = array( //List your Taxes percent here. 
                            '' => .065
                            );  
    $shipping              = array( //List your Taxes percent here.
                            '' => 4.50, 
                            );

//local
$mysqli = new mysqli('localhost', 'root', '', 'ju655443');
//sulley
//$mysqli = new mysqli('sulley.cah.ucf.edu', 'ju655443', 'Jade7369!', 'ju655443');  

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>