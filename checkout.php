
<?php
  $pageTitle = 'Batchpad.com - Home';
  include('header.php');
  include('db_connect.php');
?>
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
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Checkout:Options</li>
      </ul>
      <div class="row">        
        <!-- Account Login-->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <h2 class="heading1"><span class="maintext">Checkout</span></h2>
        <div class="checkoutsteptitle">Step 1: Checkout Options </div>
        <div class="checkoutstep ">
        <!-- Sign-in Modal -->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Please Sign-in</h4>
              </div>
              <!-- contents of Sign-in modal -->
              <div class="modal-body"> 
              <div class="form-group">
                    <label class="control-label" >Username<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class=""  value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" >Password<span class="red">*</span></label>
                    <div class="controls">
                      <input type="text" class=""  value="">
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Sign-in</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal -->
          <section class="newcustomer ">
            <h3 class="heading3">New Customer </h3>
            <div class="loginbox">
              <form method="post" action="">
                <input type="radio" name="register" value="register.php"> Register Account</input>
                <br>
                <input type="radio" name="guest" value="checkout2.php"> Guest Checkout</input>
                <p><br>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                <br>
                <input type="submit" class="btn btn-orange"/>
                &nbsp; Already a customer? <a href="login.php"> &nbsp; Sign-in</a>
              </form>
            </div>
          </section> 
        <!-- Sidebar Start-->
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span><i class="icon-list-ol"></i> Checkout Steps</span></h2>
              <ul class="nav nav-list categories">
                <li>
                  <a class="active">Checkout Options</a>
                </li>
                <li>
                  <a>Billing &amp; Shipping Details</a>
                </li>               
                <li>
                  <a> Payment Method &amp; Confirm Order</a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
      </div>

  </section>
      </div>  
</div>
<?php
include('footer.php');
?>