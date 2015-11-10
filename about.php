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
    	
       <li class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-group font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Who We Are </h2>
        Welcome to Batchpad, your one-stop shop for innovative and expressive bachelor pad decor. Whether it’s the comforts of home or your very own charm, Batchpad can help establish an affordable atmosphere within your room or apartment that is uniquely you. We provide amazing design templates for your convenience that make it even easier to find exactly what you are looking for, without being hassled with pesky search bars or referencing other sources.   </div>
</div>
        </li>
        <li class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-time font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our History</h2>
        For the past decade, Batchpad has been the leading distributor of items and accessories specific to the single man’s lifestyle. But we didn’t start off that way and, in the business world, an excellent finish is beholden to those who had the better beginning. That is why we created Batchpad.com. We believe that, in any situation, everyone deserves the best beginning to insure the best of endings. New beginnings, such as: college, a career, marriage, etc., don’t require a new you and college can be an already intimidating and lonely experience, especially if you can’t express your true self to those around you. At Batchpad, we never stop improving our inventory with accessories and designs that will match virtually any creative appetite and show the world who you are, or who you hope to be.
</div>
</div>
        </li>
        
        
      </ul> 
       <ul class="aboutus row">
        <li class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-upload font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our Goal</h2>
        Our goal is excellence and delivery of the best furniture at the best price to each of our clients is how we continue to reach and improve upon that goal every day.No matter your lifestyle, hobby or taste, Batchpad has more of what you need to enjoy walking through that front door at the end of every day. With an ever-expanding inventory, and new shipments coming every day, why would you shop anywhere else?</div>
</div>
        </li>
        <li class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-thumbs-up font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2"> Satisfaction </h2>
        It is our belief that every man deserves his own place to relax after a long day of work, class, or working out at the gym. We offer items such as: pool tables; poker tables; office and gaming chairs; bar stools; massage-recliners; sports memorabilia and even personal refrigerators disguised as a tool box. Each item we offer is guaranteed to bring that single-man flair to your home, or your money back. </div>
</div>
        </li>
        
        
      </ul>

      <ul class="aboutus row">
        <li class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-globe font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Worldwide Network</h2>
        Through our association with the United States Postal Service, UPS, FedEx, and DHL Express, Batchpad is able to distribute purchased items and accessories locally and nationally. Our first-rate delivery teams take every step to make sure that you get what you order, when you need it. We utilize various forms of transportation (airplane, ground-vehicle, overseas) and packaging methods in order to insure product delivery in a safe and timely manner.
 </div>
</div>
        </li>
      <li class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-globe font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our Growth</h2>
        We're working hard everyday to keep our company growing strong and worldwide so that people around the world can come to Batchpad and find what they need, and get what they want with the high quality products in the pleasant prices and service.  

    </ul>
</div>
</div>
    </section>
    </div>
    <!-- Section End--> 
    
<!-- /maincontainer --> 
<?php include_once('footer.php'); ?>