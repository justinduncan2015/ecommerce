<?php
  include('header.php');
  include('db_connect.php');
  $id= $_GET['id'];
  $select_id = "SELECT * FROM products WHERE product_id = $id";
  $myProduct = $mysqli->query($select_id);
?>

<!-- Header End -->
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
<!-- Header End -->

<div id="maincontainer">
    <section id="product">
        <div class="container"> 
        <ul class="breadcrumb">
        <li>
          <a href="home.php">Home/ </a>
        </li>
        <li>
          <a href="catalog.php">Shop&nbsp;/ </a>
        </li>
        <li class="active">Product view</li>
      </ul>
            <!-- Product Details-->
            <div class="row"> 
                <!-- Left Image-->
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 span5">
                      <ul class="thumbnails mainimage clearfix">
          <?php
		  $row = $myProduct->fetch_object(); 
		  echo '<li class="col-lg-12 col-md-12 col-xs-12 col-sm-12 span5"> <img class="my-foto-container" src="'.$row->image_url.'"  data-large="'.$row->image_url.'" data-title="'.$row->product_name.'" data-help="'.$row->product_name.'" title="'.$row->product_name.'" /> </li>'; ?>
        </ul>
                </div>
                <!-- Right Details-->
                <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12 span7">
                    <div class="row">
                        <div class="span7">
                            <?php echo '<h1 class="productname"><span class="bgnone">'.$row->product_name.'</span></h1>'; ?>

                            <!-- Product Description tab & comments-->
                            <div class="productdesc">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#description">Description</a> </li>
                                    <li><a href="#specification">Specifications</a> </li>
                                    <li><a href="#review">Reviews</a> </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <h2>Product Description</h2>
                                        <?php echo $row->description; ?> 
                                        <br>
                                    </div>
                                    <div class="tab-pane " id="specification">
                                        <ul class="productinfo">
                                            <li> <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                                            <li> <span class="productinfoleft"> Reward Points:</span> 60 </li>
                                            <li> <span class="productinfoleft"> Availability: </span> In Stock </li>
                                            <li> <span class="productinfoleft"> Old Price: </span> $500.00 </li>
                                        </ul>
                                    </div>
                                    <!-- need to put an isset if user is logged in here, if not display link to log in -->
                                    <?php if(isset($_SESSION['logged_in'])){
										?>
                                    <div class="tab-pane" id="review">
                                        <h3>Write a Review</h3>
                                        <form class="form-vertical">
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label">Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Review</label>
                                                    <div class="controls">
                                                        <textarea rows="3"  class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <input type="submit" class="btn btn-orange" value="continue">
                                        </form>
                                    </div>
                                     <?php }else{
										 ?>
                                         <div class="tab-pane" id="review">
                                        <h3>Write a Review</h3>
                                        <?php
											echo '<h5 class="text-nopad">You must <a class="orange" href="register.php">Register</a> to leave a review!</h5><br>';
											echo 'Already a member? <a class="orange" href="#myModal" data-toggle="modal"> &nbsp; Sign-in</a>';
										}
										?>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="productprice">
                                <?php echo '<div class="productpageprice"> <span class="spiral"></span>'.$row->cost.'</div>';
                                	  echo '<div class="productpageoldprice">Old price : '.$row->price.'</div>'; ?>
                                </div>
                            <div class="productbtn">
                                <button class="btn btn-orange tooltip-test" data-original-title="Cart"> <i class="icon-shopping-cart icon-white"></i>  Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Related Products-->
    <section id="related" class="row mt40">
        <div class="container">
            <h1 class="heading1"><span class="maintext">Related Products</span></h1>
            <ul class="thumbnails">
                                <li class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3"> <a class="prdocutname" href="product.php">My First Product</a>
                                    <div class="thumbnail"> <a href="#"><img alt="" src="img/product2a.jpg"></a>
                                        <div class="shortlinks">
                                            <button  data-original-title="Cart" class="btn btn-orange tooltip-test"> <i class="icon-shopping-cart icon-white"></i> </button>
                                            <button  data-original-title="Wishlist" class="btn btn-orange btn-small tooltip-test"> <i class="icon-heart icon-white"></i> </button>
                                            <button  data-original-title="Compare" class="btn btn-orange btn-small tooltip-test"> <i class="icon-refresh icon-white"></i> </button>
                                        </div>
                                        <div class="price">
                                            <div class="pricenew">$4459.00</div>
                                            <div class="priceold">$5000.00</div>
                                            <div class="ratingstar"> <i class="icon-star orange"> </i><i class="icon-star orange"> </i><i class="icon-star orange"> </i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></div>
                                        </div>
                                        <a  class="btn btn-orange btn-small  addtocartbutton">Add to Cart</a> </div>
                                </li>
                            </ul>
        </div>
    </section>
    <!-- Popular Brands-->
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

<?php
include ('footer.php');
?>