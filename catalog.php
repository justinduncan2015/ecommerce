<?php
if((isset($_POST['view'])&&($_POST['view']))||(isset($_POST['sort'])&&($_POST['sort']))){
	header("location:catalog.php?page=1");
}
if(isset($_SESSION['page'])){
                        $sort=$_SESSION['page'];
                    }else{
						$_SESSION['page']='1';
					}
include("db_connect.php");
include("header.php");

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>

<div id="categorymenu">
  <nav class="subnav">
    <ul class="nav-pills categorymenu container">
      <li><a class="home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
      <li><a class="active" href="catalog.php">Shop</a></li>
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
        <li> <a href="home.php">Home</a> <span class="divider">/</span> </li>
        <li class="active">Shop</li>
      </ul>
      <div class="row"> 
        <!-- Sidebar Start--> 
        <!-- Sidebar-->
        <aside class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3"> 
          <!-- Category-->
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"><i class="icon-th-list"></i> Categories</span></h1>
            <ul class="nav nav-list categories">
              <li> <a href="category.php">Furniture</a>
                <ul>
                  <li> <a href="catalog.php">Kitchen </a> </li>
                  <li> <a href="catalog.php">Outdoor </a> </li>
                  <li> <a href="catalog.php">Living Room</a> </li>
                  <li> <a href="catalog.php">Bed &amp; Bath</a> </li>
                </ul>
              </li>
              <li> <a href="catalog.php">Kitchen</a> </li>
              <li> <a href="catalog.php">Electronics </a> </li>
              <li> <a href="catalog.php">Bathroom </a> </li>
              <li> <a href="catalog.php">Outdoor</a> </li>
              <li> <a href="catalog.php">Living Room</a> </li>
              <li> <a href="catalog.php">Miscellanious</a> </li>
            </ul>
          </div>
          <!--  Hottest New Products -->
          <div class="sidewidt">
            <h1 class="heading1"><span class="maintext"><i class="icon-bookmark"></i> Hot New Items</span></h1>
            <ul class="bestseller">
            <?php
			        $zero=0;
        			$limit=6;
        			$new = 'SELECT * FROM products WHERE new="yes"';
        			$myNew = $mysqli->query($new);
        			//$myNew = mysql_query($new,$con);  
              while(($row = $myNew->fetch_object()) && ($zero<=$limit)){
	              $zero++;
	              echo "<li> <img width='50' height='50' src=" .$row->image_url. " alt='product' title='product'> <a class='productname' href='product.php?id=".$row->product_id."'>" .$row->product_name. "</a><span class='procategory'>Furniture</span> <span class='price'>" . $row->price. "</span> </li>";
              }
            ?>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
		    <!-- Category End-->
        
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">	 
          <!-- Category Products-->
          <section id="category">
            <h1 class="heading1"><span class="maintext"> <i class="icon-money"></i> Catalog</span></h1>
            <div class="row">
            <div class="sorting well">
            
            <?php 
			
			if(isset($_SESSION['sort'])){
                        $sort=$_SESSION['sort'];
                    }

                    else{$_SESSION['sort']='blank';
					
					}
			
			(isset($_POST["sort"])) ? ($sort = $_POST["sort"]) &&($_SESSION['sort']=$_POST["sort"]) : $sort=$_SESSION['sort'];?>
            <div class="pull-left">
            <form id="sort_form" class="form-inline" method="post" onchange="change2()">
            Sort By:
                <select id="sort" name="sort" class="span2">
                  <option <?php if ($sort == 'blank' ) echo 'selected' ; ?> value='blank'>--</option>
                  <option <?php if ($sort == 'Name' ) echo 'selected' ; ?> value='Name'>Name: A-Z</option>
                  <option <?php if ($sort == 'Price' ) echo 'selected' ; ?> value='Price'>Price: Low to high</option>
                </select>
            </form>
            <?php
			
			if(isset($_SESSION['view'])&&($_SESSION['view']>12)){
				$view=$_SESSION['view'];
			}else{
				$_SESSION['view']=12;
			}
				
                ?>
                </div>
        		    <!-- amount of products sidebar --> 
                <?php
				          ((isset($_POST['view'])) ? ($view = $_POST['view'])&&($_SESSION['view']=$_POST['view']) : $view=$_SESSION['view']);
				        ?>
                <div class="pull-right">
                
                <form id="view_form" method="post" onchange="change()" class="pull-right">
                View:
                    <select class="span1" id="view" name="view">
                      <option <?php if ($view == 12 ) echo 'selected' ; ?> value="12">12</option>
                      <option <?php if ($view == 24 ) echo 'selected' ; ?> value="24">24</option>
                      <option <?php if ($view == 36 ) echo 'selected' ; ?> value="36">36</option>
                    </select>
                    <?php 
				$page = (int) $_GET['page'];
                if ($page < 1) $page = 1;
                $startResults = ($page - 1) * $view;
                $numberOfRows = mysqli_num_rows($mysqli->query('SELECT * FROM products'));
                $totalPages = ceil($numberOfRows / $view);
				
				 
				if($sort=='Name'){
					
                    $all = "SELECT * FROM products
                     ORDER BY product_name ASC LIMIT $startResults, $view";
                }

                elseif($sort=='Price'){
                    $all = "SELECT * FROM products
                     ORDER BY cost ASC LIMIT $startResults, $view";
                }

                else{
                    $all = "SELECT * FROM products LIMIT $startResults, $view";
					
                }
				
				$new = 'SELECT * FROM products WHERE new = "yes"';
				$myAll = $mysqli->query($all);
			
						$last = "SELECT product_id FROM products ORDER BY product_id DESC";
            			$myLast = $mysqli->query($last);
            			$amount = $myLast->fetch_object();
                        if(($startResults+$view)>($amount->product_id)){
                     print " ".($startResults+1)."-".($amount->product_id)." of ".$amount->product_id."\n";
                    }
                    else{
                        print " ".($startResults+1)."-".($startResults+$view)." of ".$amount->product_id."\n";
                    }
                    
            		?>
                </form>
                </div>
                </div>
            <!-- amount of items to view END -->
         </div>
         <!-- sort by and view number of items div END -->            
                <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails list row" style="display:block" >
                  <?php
if($view==24){
				$zero=1;
                        while(($row = $myAll->fetch_object())&&($zero<=$view)){
							$zero++;
				  ?>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
						<?php echo "<div class='col-lg-4 col-md-4 col-xs-12 col-sm-6 span3'><a href='product.php?id=".$row->product_id."'><img alt='' src=" . $row->image_url. "></a> </div>";
                              echo "<div class='col-lg-6 col-md-6 col-xs-12 col-sm-12'><a class='prdocutname' href='product.php?id=".$row->product_id."'>" .$row->product_name. "</a>";
                              echo "<div class='productdiscrption'>" .$row->description. "<br></div>";
                              echo "<div class='price'>";
                              echo "<div class='pricenew'>" .$row->price. "</div>";
                              echo "<div class='ratingstar'>";
                              echo "<div class='rw-ui-container' data-urid=" . $row->product_id. "></div>"; ?>
                              		</div>
                                    <a  class='btn btn-orange btn-large addtocartbutton pull-left'>Add to Cart</a>
                            	</div>					
                            </div>
                            
                          </div>
                         
                        </div>
                    </li>
                   <?php } }
elseif($view==36){
				$zero=1;
						
					/* While loop sending back 36 item view */
                       while(($row = $myAll->fetch_object())&&($zero<=$view)){
							$zero++;
				   ?>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
						<?php echo "<div class='col-lg-4 col-md-4 col-xs-12 col-sm-6 span3'><a href='product.php?id=".$row->product_id."'><img alt='' src=" . $row->image_url. "></a> </div>";
                              echo "<div class='col-lg-6 col-md-6 col-xs-12 col-sm-12'><a class='prdocutname' href='product.php?id=".$row->product_id."'>" .$row->product_name. "</a>";
                              echo "<div class='productdiscrption'>" .$row->description. "<br></div>";
                              echo "<div class='price'>";
                              echo "<div class='pricenew'>" .$row->price. "</div>";
                              echo "<div class='ratingstar'>";
                              echo "<div class='rw-ui-container' data-urid=" . $row->product_id. "></div>"; ?>
                              		</div>
                                    <a  class='btn btn-orange btn-large addtocartbutton pull-left'>Add to Cart</a>
                            	</div>					
                            </div>
                            
                          </div>
                         
                        </div>
                    </li>
                   <?php } }
else{
				$zero=1;
						
						/* While loop sending back 12 item view */
                        while(($row = $myAll->fetch_object())&&($zero<=$view)){
							$zero++;
				  ?>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
						<?php echo "<div class='col-lg-4 col-md-4 col-xs-12 col-sm-6 span3'><a href='product.php?id=".$row->product_id."'><img alt='' src=" . $row->image_url. "></a> </div>";
                              echo "<div class='col-lg-6 col-md-6 col-xs-12 col-sm-12'><a class='prdocutname' href='product.php?id=".$row->product_id."'>" .$row->product_name. "</a>";
                              echo "<div class='productdiscrption'>" .$row->description. "<br></div>";
                              echo "<div class='price'>";
                              echo "<div class='pricenew'>" .$row->price. "</div>";
                              echo "<div class='ratingstar'>";
                              echo "<div class='rw-ui-container' data-urid=" . $row->product_id. "></div>"; ?>
                              		</div>
                                    <a  class='btn btn-orange btn-large addtocartbutton pull-left'>Add to Cart</a>
                            	</div>					
                            </div>
                            
                          </div>
                         
                        </div>
                    </li>
                   <?php } } ?>
                  </ul>
                  <div class="pull-right">

                <ul class="pagination">
                    <li>
                    <?php
                        if($page > 1)
                        echo '<a href="?page='.($page - 1).'">Prev</a>'; 
                    ?>
                    </li>
                   
                    <?php  for($i = 1; $i <= $totalPages; $i++){
   					if($i == $page)
      					echo '<li class="active"><a><strong>'.$i.'</strong></a></li>&nbsp';
   					else
      					echo '<li><a href="?page='.$i.'">'.$i.'</a><li>&nbsp';
					} 
                    ?>

                   <li>
                    <?php
                        echo '<a href="?page='.($page + 1).'">Next</a>'; 
                    ?>
                    </li>
                </ul>


            
                 <?php  
                    if(($startResults+$view)>($amount->product_id)){
                     print " ".($startResults+1)."-".($amount->product_id)." of ".$amount->product_id."\n";
                    }
                    else{
                        print " ".($startResults+1)."-".($startResults+$view)." of ".$amount->product_id."\n";
                    }
                 ?>
           
       </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>

<footer id="footer">
    <section class="footersocial">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 info">
                    <h2> <i class="icon-link"></i> SiteMap </h2>
                    <ul>
                        <li><a href="home.php">Home</a> </li>
                        <li><a href="client.php">My Account</a> </li>
                        <li><a href="catalog.php">Shop</a> </li>
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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "259474",
            uid: "3b0bc03895785eed657c9e205359ca03",
            source: "website",
            options: {
                "advanced": {
                    "font": {
                        "hover": {
                            "color": "#B7D086"
                        },
                        "size": "12px",
                        "bold": true,
                        "color": "#B7D086"
                    }
                },
                "size": "tiny",
                "label": {
                    "background": "#427E53"
                },
                "style": "oxygen_green",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));
    
	
	function change(){
    	document.getElementById("view_form").submit();
		
	}

	function change2(){
    	document.getElementById("sort_form").submit();
		
	}
    
    </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69797602-1', 'auto');
  ga('send', 'pageview');
</script>

<?php
mysql_close($con);
?>
</body>
</html>