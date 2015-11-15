<?php
    $pageTitle = 'Batchpad.com - Home';
    include('header.php');
    include('db_connect.php');
    var_dump($_POST);
?>

<!-- Header End -->
<div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a class="home active" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a href="catalog.php?page=1">Shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <?php
                if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "admin")) {
                print "<li><a href='admin.php'>Admin</a> </li>";
                }
                ?>
                <li class="pull-right">
                    <form action="search.php" method="post" class="form-search top-search">
                        <input type="text" name="search" class="input-small search-query" placeholder="Search Here…">
                        <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>   

<div id="maincontainer">
  <section id="product">
    <div class="container">
    <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li><a href="home.php">Home/ </a></li>
        <li><a href="checkout.php">Checkout:Options&nbsp;/ </a></li>
        <li><a href="checkout2.php">Billing&nbsp;&amp;&nbsp;Shipping&nbsp;/ </a></li>
        <li class="active">Payment&nbsp;&amp;&nbsp;Confirm&nbsp;</li>
      </ul>
      <div class="row">        
        <!-- Account Login-->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <h2 class="heading1"><span class="maintext">Checkout</span></h2>
        <div class="checkoutsteptitle">Billing &amp; Shipping Information</div>
        <div class="checkoutstep">
        <?php
            if(isset($_SESSION['logged_in'])){
                echo "<li><b>First Name:</b> &nbsp; &nbsp; ".$row->first_name."</li><br>";
                echo "<li><b>Last Name:</b> &nbsp; &nbsp; ".$row->last_name."</li><br>";
                echo "<li><b>E-mail:</b> &nbsp; &nbsp; ".$row->email."</li><br>";
                echo "<li><b>Address 1:</b> &nbsp; &nbsp; ".$row->address1."</li><br>";
                echo "<li><b>Address 2:</b> &nbsp; &nbsp; ".$row->address2."</li><br>";
                echo "<li><b>City:</b> &nbsp; &nbsp; ".$row->city."</li><br>";
                echo "<li><b>State:</b> &nbsp; &nbsp; ".$row->state."</li><br>";
                echo "<li><b>Zip Code:</b> &nbsp; &nbsp; ".$row->zip."</li><br>";
                echo "<li><b>Telephone:</b> &nbsp; &nbsp; ".$row->telephone."</li><br>";
                echo "<li><b>Mobile:</b> &nbsp; &nbsp; ".$row->mobile."</li><br>";
                echo "<li><b>Company:</b> &nbsp; &nbsp; ".$row->company."</li><br>";
            }elseif(isset($_POST['submit'])){
                echo "<li><b>First Name:</b> &nbsp; &nbsp; ".$_POST['bFirst']."</li><br>";
                echo "<li><b>Last Name:</b> &nbsp; &nbsp; ".$_POST['bLast']."</li><br>";
                echo "<li><b>Address 1:</b> &nbsp; &nbsp; ".$_POST['bAddress1']."</li><br>";
                echo "<li><b>Address 2:</b> &nbsp; &nbsp; ".$_POST['bAddress2']."</li><br>";
                echo "<li><b>City:</b> &nbsp; &nbsp; ".$_POST['bCity']."</li><br>";
                echo "<li><b>State:</b> &nbsp; &nbsp; ".$_POST['bSate']."</li><br>";
                echo "<li><b>Zip Code:</b> &nbsp; &nbsp; ".$_POST['bZip']."</li><br>";
                echo "<li><b>Country/Region:</b> &nbsp; &nbsp; ".$_POST['bCountry']."</li><br>";
                echo "<br><br>";
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
        </div>
        <div class="checkoutsteptitle">Confirm Order </div>
        <div class="checkoutstep">
          <div class="cart-info">
            <table class="table table-striped table-bordered">
              <tr>
                <th class="image">Image</th>
                <th class="name">Product Name</th>
                <th class="model">Model</th>
                <th class="quantity">Quantity</th>
                <th class="price">Unit Price</th>
                <th class="total">Total</th>
              </tr>
              <tr>
                <td class="image"><a ><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                <td   class="name"><a >product1</a></td>
                <td class="model">Product1</td>
                <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
                  &nbsp; <a  class="mr10"> <i class="tooltip-test font24 icon-refresh " data-original-title="Update"> </i> </a> <a ><i class="tooltip-test font24 icon-remove-circle" data-original-title="Remove"> </i></a></td>
                <td class="price">$130.00</td>
                <td class="total">$110.25</td>
              </tr>
              <tr>
                <td class="image"><a ><img title="product" alt="product" src="img/prodcut-40x40.jpg" height="50" width="50"></a></td>
                <td   class="name"><a >Product 1</a></td>
                <td class="model">product 1</td>
                <td class="quantity"><input type="text" size="1" value="1" name="quantity[40]" class="span1">
                  &nbsp; <a  class="mr10"> <i class="tooltip-test font24 icon-refresh " data-original-title="Update"> </i> </a> <a ><i class="tooltip-test font24 icon-remove-circle" data-original-title="Remove"> </i></a></td>
                <td class="price">$124.38</td>
                <td class="total">$120.46</td>
              </tr>
            </table>
          </div>
          <div class="pull-right">
            <table class="table table-striped table-bordered ">
              <tbody>
                <tr>
                  <td><span class="extra bold">Sub-Total :</span></td>
                  <td><span class="bold">$101.00</span></td>
                </tr>
                <tr>
                  <td><span class="extra bold">Sales Tax (6.00%) :</span></td>
                  <td><span class="bold">$11.00</span></td>
                </tr>
                <tr>
                  <td><span class="extra bold totalamout">Total :</span></td>
                  <td><span class="bold totalamout">$120.68</span></td>
                </tr>
              </tbody>
            </table>
            <form action="#">
            <input  type="submit" class="btn btn-orange pull-right" value="CheckOut">
            </form>
            <form action="catalog.php?page=1">
            <input type="submit" class="btn btn-orange pull-right mr10" value="Continue Shopping">
            </form>
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
    </div>
  </section>
</div>

<?php
include('footer.php');
?>