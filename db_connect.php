<?php
$currency = '&#36;'; //Currency Character or code
    $shipping_cost      = 5.89; //shipping cost
    $taxes              = array( //List your Taxes percent here. 
                            '' => .065
                            );  
    $shipping              = array( //List your Taxes percent here.
                            '' => 4.50, 
                            );

    $PayPalMode         = 'sandbox'; // sandbox or live
    $PayPalApiUsername  = 'trav1030-facilitator_api1.knights.ucf.edu'; //PayPal API Username
    $PayPalApiPassword  = 'UB7C4ZLGNZXPR75F'; //Paypal API password
    $PayPalApiSignature     = 'AFcWxV21C7fd0v3bYYYRCpSSRl31AbK-8kJ8qTXcPY.PIAkGtPDDlnKe'; //Paypal API Signature
    $PayPalCurrencyCode     = 'USD'; //Paypal Currency Code
    $PayPalReturnURL    = 'http://localhost/ecommerce/process.php'; //Point to process.php page
    $PayPalCancelURL    = 'http://localhost/ecommerce/home.php'; //Cancel URL if user clicks cancel
    error_reporting(E_ALL ^ E_NOTICE);
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