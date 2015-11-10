<?php 
$pageTitle = 'Batchpad.com - About';
include("header.php"); 
$_SESSION['url'] = $_SERVER['REQUEST_URI'];                                      
?>
    <div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a class="home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a href="catalog.php">Shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <?php
                if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "admin")) {
                print "<li><a class='active' href='admin.php'>Admin</a> </li>";
                }
				if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "customer")) {
                print "<li><a class='active' href='client.php'>My Account</a> </li>";
                }
                ?>
                <li class="pull-right">
                    <form action="search.php" method="get" class="form-search top-search">
                        <input type="text" class="input-small search-query" placeholder="Search Here…">
                        <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>   
    <!--Header End-->

<div id="maincontainer"> 
     <!--  breadcrumb --> 
     <div class="container">  
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">About Us</li>
      </ul>
       <h1 class="heading1"><span class="maintext"><i class="icon-shopping-cart"></i> About Us</span></h1>
    <!-- Section Start-->
    <section class="row" id="about">
   
    <ul class="aboutus row">
    	
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-group font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Who We Are </h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-time font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our History</h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-upload font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our Goal</h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        
      </ul> 
       <ul class="aboutus row">
    	
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-thumbs-up font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2"> Satisfaction </h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-globe font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Worldwide Network</h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-signal font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our Growth </h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
      </ul> 
    </section>
    </div>
    <!-- Section End--> 
    
<!-- /maincontainer --> 
<?php include_once('footer.php'); ?>