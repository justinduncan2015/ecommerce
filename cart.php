<!DOCTYPE html>
<?php
 include_once('header.php');
 include_once('db_connect.php');
 include_once('cart_update.php');
?>

<div id="categorymenu">
  <nav class="subnav">
    <ul class="nav-pills categorymenu container">
      <li><a href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
      <li><a href="catalog.php?page=1">Shop</a></li>
      <li><a href="about.php">about</a></li>
      <li><a href="contact.php">Contact Us</a> </li>
      <li class="pull-right">
        <form action="search.php" method="get" class="form-search top-search">
          <input type="text" class="input-small search-query" placeholder="Search Here…">
          <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
        </form>
      </li>
    </ul>
  </nav>
</div>   

<!-- Header End -->
<div id="maincontainer">
    
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active"> Cart</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> <i class="icon-shopping-cart"></i> Shopping Cart</span></h1>
      <!-- Cart-->
      
     <div class="simpleCart_items">
  <br />
  SubTotal: <span class="simpleCart_total"></span> <br />
  Tax: <span class="simpleCart_taxCost"></span> <br />
  Shipping: <span class="simpleCart_shippingCost"></span> <br />
  -----------------------------<br />
  Final Total: <span class="simpleCart_finalTotal"></span> <br />

  <a href="javascript:;" class="simpleCart_checkout">checkout</a> 
    </div>
  


      <div class="container">
      <div class="pull-right">
          <div class="">
           
            <div class="list-inline">
         
            <a href="catalog.php"><input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10"></a>
            </div>
          </div>
        </div>
        </div>
    </div>
  </section>
</div>
<?php  
include('footer.php');
?>
    <script src="js/simpleCart.js"></script>
  <script>
    simpleCart({
      checkout: { 
        type: "PayPal" , 
        email: "you@yours.com" 
      }
    }); 
  </script>

