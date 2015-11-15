<?php
$pageTitle = 'Batchpad.com - Checkout';
include_once('header.php');
?>
<div id="categorymenu">
	<nav class="subnav">
		<ul class="nav-pills categorymenu container">
			<li><a class="active home" href="home.html"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
			<li><a href="catalog.html">Shop</a></li>
			<li><a href="about.html">about</a></li>
			<li><a href="contact.html">Contact Us</a> </li>
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
        <div class="checkoutsteptitle">Personal information</div>
        <div class="checkoutstep">
          <p>Please ensure these details are correct before continuing.</p>
          
          <br>
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

<!-- Footer -->
<footer id="footer">
    <section class="footersocial">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 info">
                    <h2> <i class="icon-link"></i> SiteMap </h2>
                    <ul>
                        <li><a href="home.php">Home</a> </li>
                        <li><a href="client.php">My Account</a> </li>
                        <li><a href="catalog.php?page=1">Shop</a> </li>
                        <li><a href="contact.php">Contact Us</a> </li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="cart.php">My Cart</a> </li>
                        <li><a href="register.php">Sign-Up</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 contact">
                    <h2> <i class="icon-phone-sign"></i> Contact Info </h2>
                    <ul>
                        <li class="location"> 404 Not found Rd.‎ Melbourne, Fl 32903</li>
                        <li class="phone">(800)555-7890 &nbsp; (877)555-7890</li>
                        <li class="mobile"> #Bachpad</li>
                        <li class="email"> sales@batchpad.com</li>
                    </ul>
                </div>
                <!-- Testimonial-->
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
                    <div class="sidewidt">
                        <h2 class="heading2"><span><i class="icon-edit"></i> Testimonials</span></h2>
                        <div class="flexslider" id="testimonialsidebar">
                            <ul class="slides">
                                <li>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>"Lorem Ipsum is simply dummy text of the printing and industry.<br><br>
                                    <span class="pull-left orange">By : Lorem Ipsum</span> 
                                </li>
                                <li>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>"Lorem Ipsum is simply dummy text of the printing and industry.<br><br>
                                    <span class="pull-left orange">By : Lorem Ipsum</span> 
                                </li>
                                <li>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>"Lorem Ipsum is simply dummy text of the printing and industry.<br><br>
                                    <span class="pull-left orange">By : Lorem Ipsum</span> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 facebook">
                    <h2> <i class="icon-facebook-sign"></i> Facebook </h2>
                    <div class="seperator"></div>
                    <div class="seperator1"></div>
                    <div id="fb-root"></div>
                    <div class="fb-like-box" data-href="https://www.facebook.com/BachelorHaus" data-width="292" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-show-border="false" data-header="false"  data-height="240"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="copyrightbottom">
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span5 col-lg-3 col-md-3 col-xs-12 col-sm-12 paymentsicons"></div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 textcenter"> This site is not official and is an assignment for a UCF Digital Media course - Designed by Justin Duncan </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span5 col-lg-3 col-md-3 col-xs-12 col-sm-12 paymentsicons"> <img title="PayPal" alt="paypal" src="img/payment_paypal.png"> <img title="American Express" alt="american-express" src="img/payment_american.png"><img title="Maestro" alt="maestro" src="img/payment_maestro.png"> <img title="Discover" alt="discover" src="img/payment_discover.png"> </div>
            </div>
        </div>
    </section>
    <a id="gotop" href="#">Back to top</a>
</footer>
<!-- javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script> 
<script src="js/respond.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script  src="js/jquery.prettyPhoto.js"></script> 
<script defer src="js/jquery.flexslider.js"></script> 
<script src="layerslider/js/greensock.js" type="text/javascript"></script> 
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script> 
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.tweet.js"></script> 
<script  src="js/zoomsl-3.0.min.js"></script> <script  type="text/javascript" src="js/jquery.validate.js"></script> 
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script> 
<script type="text/javascript"  src="js/jquery.mousewheel.min.js"></script> 
<script type="text/javascript"  src="js/jquery.touchSwipe.min.js"></script> 
<script type="text/javascript" src="js/jquery.gmap.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script defer src="js/custom.js"></script>

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69797602-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>