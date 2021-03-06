<?php 
session_start();
include ('db_connect.php');
		if(isset($_POST['submit'])) {
		$delete_product_query = "DELETE FROM products WHERE product_id='".$_POST['product_to_delete']."'";
		$mysqli->query($delete_product_query);
		header('Location: admin.php');
		}
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Batchpad.com - Delete Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Justin Duncan">
<link href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet" media="screen">
<link href="css/portfolio.css" rel="stylesheet">
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" href="layerslider/css/layersliderstyle.css" type="text/css">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header Start -->
<header>
    <div class="headerstrip">
        <div class="container">
            <a class="logo pull-left" href="home.php"><img title="BatchPad" alt="BatchPad" src="img/logo.png"></a>
            <!-- Top Nav Start -->
            <div class="pull-right">
                <div class="navbar" id="topnav">
                    <div class="navbar-inner">
                        <ul class="nav" >
                        	<?php 
							if(!isset($_SESSION['logged_in'])) { 
							?>
                            
                        	<li class="text-nopad text-center"><a href="register.php">Sign-up</a></li>
                            <li class="text-nopad"><p>or</p></li>
                        	<li class="text-nopad"><a href="#myModal" data-toggle="modal"> &nbsp; login</a></li>
                            <li class="dropdown hover carticon "> <a href="cart.php" class="dropdown-toggle" > <i class="icon-shopping-cart font18"></i> Shopping Cart <span class="label label-orange font14">2 item(s)</span> - $1,790.00 <b class="caret"></b></a>
                            
                            <?php
							}else if(($_SESSION['logged_in_user_access'] == "admin")||($_SESSION['logged_in_user_access'] == "superuser")) {
							print "<li class='text-nopad red'><p>Hello, ".$_SESSION['logged_in_firstname']."!</p></li>"; ?>
                        	<li class="text-nopad"><p> &nbsp; Not you?</p></li>
                            <li class="text-nopad"><a href="logout.php"> &nbsp; Logout</a></li>
                            
                            <?php 
							}elseif(($_SESSION['logged_in_user_access'] == "customer")){
							?>
                            
							<?php echo "<li class='text-nopad text-center'>Hello".$_SESSION['logged_in_firstname']."!</a></li>"; ?>
                            <?php echo "<li class='text-nopad'><p>Hello, ".$row->user_firstname."!</p></li>"; ?>
                        	<li class="text-nopad">Not you?<a href="logout.php"> &nbsp; logout</a></li>
                            <?php echo '<li class="text-nopad"><a href="client.php?id='.$_SESSION['logged_in_user_id'].'" data-toggle="modal"> &nbsp; Account info</a></li>'; ?>
                            
                            <?php
							}
                            ?>
                            
                    </div>
                </div>
            </div>
            <!-- Top Nav End -->
        </div>
    </div>
</header>
<!-- Header End -->
<?php
	if(!isset($_SESSION['logged_in']) || ($_SESSION['logged_in_user_access'] != 'admin')) { ?>
        <div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a class="home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a href="catalog.php?page=1">Shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <?php
                if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "admin")) {
                print "<li><a class='active' href='admin.php'>Admin</a> </li>";
                }
				if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "customer")) {
                print "<li><a href='client.php?id=".$_SESSION['logged_in_user_id']."'>My Account</a> </li>";
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
    	<img class='fixed' src='img/error-404.png' alt='not found'><span>You are not authorized to perform this action!</span>

<?php
	}else if($_SESSION['logged_in_user_access'] == 'admin') {
	?>
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Admin</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Delete product</li>
      </ul>
      <div class="row">        
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <?php
        $id= $_GET['id'];
  	  	$select_product = "SELECT * FROM products WHERE product_id = $id";
      	$myProduct = $mysqli->query($select_product);
	 	$row = $myProduct->fetch_object();
		?>
		<h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> Product Deletion</span></h1>
			<div class="table table-striped table-bordered table-condensed">
			<div class="thead">
				<li>product&nbsp;Id</li>
                <li>Product Name</li>
                <li>Description</li>
                <li>Sku</li>
                <li>Qty</li>
                <li>Cost</li>
                <li>Price</li>
                <li>Image Location</li>
                <li>On&nbsp;Sale?</li>
                <li>Featured?</li>
                <li>New Product?</li>
			</div>
        <div class="tbody">
<?php
echo "<ul>";
echo "<li>" .$row->product_id. "</li>";
echo "<li>" .$row->product_name."</li>";
echo "<li>" .$row->description. "</li>";
echo "<li>" .$row->product_sku. "</li>";
echo "<li>" .$row->qty_stock. "</li>";
echo "<li>" .$row->cost."</li>";
echo "<li>" .$row->price."</li>";
echo "<li>" .$row->image_url."</li>";
//if the person accountable is not null display N/A
if($row->sale == NULL){	
	echo "<li>" . "" . "</li>";
}else{
	echo "<li>" . $row->sale. "</li>";	
}
if($row->featured == NULL){	
	echo "<li>" . "" . "</li>";
}else{
	echo "<li>" . $row->featured. "</li>";	
}
if($row->new == NULL){	
	echo "<li>" . "" . "</li>";
}else{
	echo "<li>" . $row->new. "</li>";	
}

echo "</ul>";
?>
</div>
</div>
        <form method="post" action="">
            <h4>Do you really want to delete this product?</h4> 
            <input name="product_to_delete" id="product_to_delete" type="hidden" value="<?php print $_GET['id']; ?>" /><br />
            <input name="submit" class="btn btn-success" id="yes" type="submit" value="Yes" />
            <input name="submit" class="btn btn-danger" id="no" type="submit" value="No" formaction="admin.php" />
        </form>
        
		</div>       
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

<?php } include('footer.php'); ?>