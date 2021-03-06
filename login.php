<?php
session_start();
$pageTitle = 'Batchpad.com - Login';
if(isset($_SESSION['url'])){ 
   $url = $_SESSION['url']; // holds url for last page visited.
}else{ 
   $url = "home.php";
}
include("db_connect.php");
include("header.php");?>
<?php
          if(isset($_POST['submit'])&&(!isset($_SESSION['logged_in']))) {
			  // query to select all users/passwords
			$select_users = "SELECT * FROM users";
			$select_users_result = $mysqli->query($select_users);
				if($mysqli->error) {
					print "Select query error!  Message: ".$mysqli->error;
				}					
				while($row = $select_users_result->fetch_object()) {
					if ((($_POST['username']) == ($row->username)) && (md5($_POST['password']) == ($row->password))) {
					// check if user input = a record in the database
						$_SESSION['logged_in']              = true;
						$_SESSION['logged_in_user']         = $row->username;
						$_SESSION['logged_in_firstname']    = $row->first_name;
						$_SESSION['logged_in_lastname']     = $row->last_name;
						$_SESSION['logged_in_user_id']      = $row->user_id;
						$_SESSION['logged_in_user_access']  = $row->access_level;
						$_SESSION['logged_in_email']        = $row->email;
						$_SESSION['logged_in_address1']     = $row->address1;
						$_SESSION['logged_in_address2']     = $row->address2;
						$_SESSION['logged_in_city']         = $row->city;
						$_SESSION['logged_in_state']        = $row->state;
						$_SESSION['logged_in_zip']          = $row->zip;
						$_SESSION['logged_in_telephone']    = $row->telephone;
						$_SESSION['logged_in_mobile']       = $row->mobile;
						$_SESSION['logged_in_company']      = $row->company;
						header("location: ". $url);	
					}
				}
			}
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
        if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "customer")) {
                print "<li><a href='client.php?id=".$_SESSION['logged_in_user_id']."'>My Account</a> </li>";
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
        <li class="active">Login</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
        
        	<div class="login-container">
          <h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> Please Login</span></h1><br /> 
          <fieldset>
          <div class="control-group">
          	<form method="post" action="">
          		<label class="control-label" >Username<span class="red">&nbsp;*</span></label>
          		<div class="controls">
          			<input name="username" id="username" type="text" placeholder="Username or Email"/>
          		</div>
          </div>
          <br />
          <div class="control-group">
          	<label class="control-label" >Password<span class="red">&nbsp;*</span></label>
          		<div class="controls">
                	<input name="password" id="password" type="password" placeholder="Password"/>
                </div>
          </div>
            <div class="pull-left">
            <?php
          if(isset($_POST['submit'])&&(!isset($_SESSION['logged_in']))) {
			  // query to select all users/passwords
			$select_users = "SELECT * FROM users";
			$select_users_result = $mysqli->query($select_users);
				if($mysqli->error) {
					print "Select query error!  Message: ".$mysqli->error;
				}					
				while($row = $select_users_result->fetch_object()) {
					if ((($_POST['username']) != ($row->username)) && (md5($_POST['password']) != ($row->password))) {
					// check if user input = a record in the database
						?>
						<span class="errormsg">Sorry, Invalid username or password</span>
                    	<span class="registerbox">Forgot your password?<a href="#"> &nbsp;Click here </a></span><br /><br>
                        <?php break;	
					}
				}
			}
			?>
					
				<input name="submit" id="submit" type="submit" class="btn btn-success" value="&nbsp; Sign-in &nbsp;" />
                <input action="action" type="button" class="btn btn-danger" value=" Cancel " onclick="window.history.go(-1); return false;" />
                <span class="registerbox">Not a member yet? &nbsp;<a href="register.php">Sign-up!</a></span>
                </div>
                </fieldset>
				</form>
            </div>
          <div class="clearfix"></div>
          <br>
        </div>        
        <!-- Sidebar Start-->
        <aside class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"> <i class="icon-user"></i> Need Help?</span></h1>
            <ul class="nav nav-list categories">
              <li>
                <a href="psrecovery.php"> forgot your password?</a>
              </li>
              <li>
                <a href="about.php"> Privacy Policy</a>
              </li>
              <li>
                <a href="about.php">Why Sign up?</a>
              </li>
              <li>
                <a href="contact.php">Questions? Contact us!</a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69797602-1', 'auto');
  ga('send', 'pageview');
</script>

<?php include('footer.php'); ?>