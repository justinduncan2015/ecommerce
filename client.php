<?php
  $pageTitle = 'Batchpad.com - Profile';
  include('header.php');
  include('db_connect.php');
  $id= $_GET['id'];
  $select_id = "SELECT * FROM users WHERE user_id = $id";
  $select_id_result = $mysqli->query($select_id);

	if(!isset($_SESSION['logged_in']) || ($_SESSION['logged_in_user_access'] == 'admin') || ($_SESSION['logged_in_user_access'] == 'superuser') ) {

		print "This is for customer information, Login as the test user account to view content!.";
		
	}else if($_SESSION['logged_in_user_access'] == 'customer') {
?>
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
        <li class="active">Account Info</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
          <h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> My Account details</span></h1>
          <ul class="unstyled listoption2">
          	<?php echo "<li><b>First Name:</b> &nbsp; &nbsp; ".$row->first_name."</li><br>"; ?>
            <?php echo "<li><b>Last Name:</b> &nbsp; &nbsp; ".$row->last_name."</li><br>"; ?>
            <?php echo "<li><b>E-mail:</b> &nbsp; &nbsp; ".$row->email."</li><br>"; ?>
            <?php echo "<li><b>Billing Address:</b> &nbsp; &nbsp; ".$row->address1."</li><br>"; ?>
            <?php echo "<li><b>Shipping Address:</b> &nbsp; &nbsp; ".$row->address2."</li><br>"; ?>
            <?php echo "<li><b>City:</b> &nbsp; &nbsp; ".$row->city."</li><br>"; ?>
            <?php echo "<li><b>State:</b> &nbsp; &nbsp; ".$row->state."</li><br>"; ?>
            <?php echo "<li><b>Zip Code:</b> &nbsp; &nbsp; ".$row->zip."</li><br>"; ?>
            <?php echo "<li><b>Telephone:</b> &nbsp; &nbsp; ".$row->telephone."</li><br>"; ?>
            <?php echo "<li><b>Mobile:</b> &nbsp; &nbsp; ".$row->mobile."</li><br>"; ?>
            <?php echo "<li><b>Company:</b> &nbsp; &nbsp; ".$row->company."</li><br>"; ?>
          </ul>
          <div class="clearfix"></div>
          <br>
        </div>        
        <!-- Sidebar Start-->
        <aside class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"> <i class="icon-user"></i> Account</span></h1>
            <ul class="nav nav-list categories">
              <li>
                <a href="client.php"> My Account</a>
              </li>
              <li>
                <a href="signup.php">Edit Account</a>
              </li>
              <li>
                <a href="#">Recover Password</a>
              </li>
              <li><a href="#">Order History</a>
              </li>
              <li>
                <a href="#"> Edit Payment Options</a>
              </li>
              <li>
                <a href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>

<?php
include('footer.php');
?>