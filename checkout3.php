<!DOCTYPE html>
<?php
$pageTitle = 'Batchpad.com - Checkout';
 include_once('header.php');
 include_once('db_connect.php');
 include_once('cart_update.php');
 if(isset($_SESSION["cart_products"])){
 $cart_itm = $_SESSION["cart_products"];
 }
?>
<div id="maincontainer">
  <section id="product">
    <div class="container">
    <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home/ </a>
        </li>
        <li>
          <a href="checkout.php">Checkout:Options&nbsp;/ </a>
        </li>
        <li>
        	<a href="checkout2.php">Billing&nbsp;&amp;&nbsp;Shipping&nbsp;/ </a></li>
        <li class="active">Payment&nbsp;&amp;&nbsp;Confirm&nbsp;</li>
      </ul>
      <div class="row">        
        <!-- Account Login-->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <h2 class="heading1"><span class="maintext">Checkout</span></h2>
        <div class="checkoutsteptitle">Personal Info</div>
        <div class="checkoutstep">
        <ul class="table-bordered">
            <?php echo "<li><b>First Name:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_firstname']."</li><br>"; ?>
            <?php echo "<li><b>Last Name:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_lastname']."</li><br>"; ?>
            <?php echo "<li><b>Address 1:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_address1']."</li><br>"; ?>
            <?php echo "<li><b>Address 2:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_address2']."</li><br>"; ?>
            <?php echo "<li><b>City:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_city']."</li><br>"; ?>
            <?php echo "<li><b>State:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_state']."</li><br>"; ?>
            <?php echo "<li><b>Zip Code:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_zip']."</li><br>"; ?>
            <?php echo "<li><b>Telephone:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_telephone']."</li><br>"; ?>
            <?php echo "<li><b>Mobile:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_mobile']."</li><br>"; ?>
            <?php echo "<li><b>Company:</b> &nbsp; &nbsp; ".$_SESSION['logged_in_company']."</li><br>"; ?>
        </ul>    
        <ul class="table-bordered">
        <?php
            if(isset($_SESSION['logged_in'])){
                $row = $select_id_result->fetch_object();
                echo "<li><b>First Name:</b> &nbsp; &nbsp; ".$row->first_name."</li><br>";
                echo "<li><b>Last Name:</b> &nbsp; &nbsp; ".$row->last_name."</li><br>";
                echo "<li><b>Address 1:</b> &nbsp; &nbsp; ".$row->address1."</li><br>";
                echo "<li><b>Address 2:</b> &nbsp; &nbsp; ".$row->address2."</li><br>";
                echo "<li><b>City:</b> &nbsp; &nbsp; ".$row->city."</li><br>";
                echo "<li><b>State:</b> &nbsp; &nbsp; ".$row->state."</li><br>";
                echo "<li><b>Zip Code:</b> &nbsp; &nbsp; ".$row->zip."</li><br>";
                echo "<li><b>Telephone:</b> &nbsp; &nbsp; ".$row->telephone."</li><br>";
                echo "<li><b>Mobile:</b> &nbsp; &nbsp; ".$row->mobile."</li><br>";
                echo "<li><b>Company:</b> &nbsp; &nbsp; ".$row->company."</li><br>";
            }else if(!isset($_POST['submit'])){
                echo "<li class='checkoutsteptitle'>Billing Information</li>";
                echo "<li><b>First Name:</b> &nbsp; &nbsp; ".$_POST['bFirst']."</li><br>";
                echo "<li><b>Last Name:</b> &nbsp; &nbsp; ".$_POST['bLast']."</li><br>";
                echo "<li><b>Address 1:</b> &nbsp; &nbsp; ".$_POST['bAddress1']."</li><br>";
                echo "<li><b>Address 2:</b> &nbsp; &nbsp; ".$_POST['bAddress2']."</li><br>";
                echo "<li><b>City:</b> &nbsp; &nbsp; ".$_POST['bCity']."</li><br>";
                echo "<li><b>State:</b> &nbsp; &nbsp; ".$_POST['bState']."</li><br>";
                echo "<li><b>Zip Code:</b> &nbsp; &nbsp; ".$_POST['bZip']."</li><br>";
                echo "<li><b>Country/Region:</b> &nbsp; &nbsp; ".$_POST['bCountry']."</li><br>";

                echo "<li class='checkoutsteptitle'>Shipping Information</li>";
                echo "<li><b>First Name:</b> &nbsp; &nbsp; ".$_POST['sFirst']."</li><br>";
                echo "<li><b>Last Name:</b> &nbsp; &nbsp; ".$_POST['sLast']."</li><br>";
                echo "<li><b>Address 1:</b> &nbsp; &nbsp; ".$_POST['sAddress1']."</li><br>";
                echo "<li><b>Address 2:</b> &nbsp; &nbsp; ".$_POST['sAddress2']."</li><br>";
                echo "<li><b>City:</b> &nbsp; &nbsp; ".$_POST['sCity']."</li><br>";
                echo "<li><b>State:</b> &nbsp; &nbsp; ".$_POST['sState']."</li><br>";
                echo "<li><b>Zip Code:</b> &nbsp; &nbsp; ".$_POST['sZip']."</li><br>";
                echo "<li><b>Country/Region:</b> &nbsp; &nbsp; ".$_POST['sCountry']."</li><br>";
            }
        ?>
          </ul>
        </div>
        <div class="checkoutsteptitle">Confirm Order </div>
        <div class="checkoutstep">

      
            <div class="cart-info">
        <div class="table table-striped table-bordered">
        <form method="post" action="cart_update.php">
          <ul>
            <li class="image">Image</li>
            <li class="name">Product Name</li>
            <li class="model">Model</li>
            <li class="quantity">Qty</li>
              <li class="total">Action</li>
            <li class="price">Unit Price</li>
            <li class="total">Total</li>
           
          </ul>
          
          <tr>
          <div class="cart-view-table-back">
<form method="post">
  <tbody>
    <?php
     //include_once("config.php"); //include config file
    if(isset($_SESSION["cart_products"])) //check session var
    {
        $total = 0; //set initial total value
        $b = 0; //var for zebra stripe table 
        foreach ($_SESSION["cart_products"] as $cart_itm){
            //set variables to use in content below
            $product_name = $cart_itm["product_name"];
            $product_qty = $cart_itm["product_qty"];
            $price = $cart_itm["price"];
            $product_code = $cart_itm["product_code"];
            $description = $cart_itm["description"];
            $image_url = $cart_itm["image_url"];
            $subtotal = ($price * $product_qty); //calculate Price x Qty
            
            echo '<td class="image"><a href="#"><img title="product" alt="product" src="'.$image_url.'" height="50" width="50"></a></td>';
            echo '<td class ="name">'.$product_name.'</td>';
            echo '<td class="description">'.$description.'</td>';
            echo '<td class="quantity"><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" class="col-lg-3 col-md-3 col-xs-6 col-sm-3"></td>';
            echo '<td class="total"> <a href="#" class="mr10"> <i class="tooltip-test font24 icon-refresh " data-original-title="Update"> </i> </a> 
               <a href="#"><i class="tooltip-test font24 icon-remove-circle" data-original-title="Remove"> </i></a></td>';
            echo '<td class="price">'.$currency.$price.'</td>';
            echo '<td class="total">'.$currency.$subtotal.'</td>';
            echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
            $total = ($total + $subtotal); //add subtotal to total var
        }
   $grand_total = $total + $shipping_cost; //grand total including shipping cost
   foreach($shipping_handling as $key => $value){ //list and calculate taxes in array
                $ship_amount     = round($total) * ($value / 20);
                $ship_item[$key] = $ship_amount;
                $grand_total    = round($grand_total + $ship_amount,2);  //add shipping val to grand total
        }
        foreach($taxes as $key => $value){ //list and calculate all taxes in array
                $tax_amount     = round($total * ($value / 100));
                $tax_item[$key] = $tax_amount;
                $grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
        }
        
        $list_tax = '';
        foreach($tax_item as $key => $value){ //List all taxes
            $list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
        }
        $shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
    
            $total = ($total + $subtotal); //add subtotal to total var
            print "<input name='itemname' type='hidden'  value='".$product_name."' />\n";
			print "\t\t\t<input name='itemnumber' type='hidden'  value='".$product_code."' />\n";
            print "\t\t\t<input name='itemprice' type='hidden'  value='".$product_price."' />\n";
			print "\t\t\t<input name='itemQty' type='hidden'  value='".$product_qty."' />\n";
			$cart_item ++;
    ?>
  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />

</div>

          <div class="pull-right">
            <table class="table table-striped table-bordered ">
                <tbody>
                    <tr>
                        <td class="textright"><b>Sub-Total:</b></td>
                        <?php echo'<td><span class="bold">'.$subtotal.'</span></td>'?>
                    </tr>
                    <tr>
<<<<<<< HEAD
                        <td class="textright"><b>Tax (.065%):</b></td>
                            <?php echo '<td><span class="bold">'.$tax_amount.'</span></td>'?>
                        </tr>
                    <tr>
                        <td class="textright"><b>Shipping</b></td>
                        <?php '<td class="textright">'.$shipping_handling.'</td>'; ?>
                    </tr>
                    <tr>
                    <td class="textright"><b>Total:</b></td>
                        <?php echo  '<td><span class="bold totalamout">'.$grand_total.'</span></td>'?>
                    </tr>
                </tbody>
            </table>
           <?php } ?>
           </form>
           <form method="post" action="process.php">
            <input class="btn btn-orange dw_button add checkout_button" type="submit" name="submitbutt" value="Confirm Purchase" />
            </form>
          </div>
        </div>
      </div>        
       
      </div> 
      <!-- Sidebar Start-->
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span><i class="icon-list-ol"></i> Checkout Steps</span></h2>
              <ul class="nav nav-list categories">
                <li>
                  <a>Checkout Options</a>
                </li>
                <li>
                  <a>Billing &amp; Shipping Details</a>
                </li>               
                <li>
                  <a class="active"> Payment Method &amp; Confirm Order</a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
    </div>
  </section>
</div>

<?php include_once('footer.php'); ?>
