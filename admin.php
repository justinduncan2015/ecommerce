<?php
$pageTitle = 'Batchpad.com - Admin';
include("db_connect.php");
include("header.php");
	if(!isset($_SESSION['logged_in']) || ($_SESSION['logged_in_user_access'] != 'admin')) {
		?>
            <div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a class="home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a href="catalog.php">Shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <li class="pull-right">
                    <form action="search.php" method="get" class="form-search top-search">
                        <input type="text" class="input-small search-query" placeholder="Search Here…">
                        <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    	<img class='fixed' src='img/error-404.png' alt='not found'><span>This area is for administrators only, please sign in to view content.</span>

<?php
	}else if($_SESSION['logged_in_user_access'] == 'admin') {
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
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Admin View</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        
          <h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> Products List</span></h1>
<table class="table table-striped table-bordered table-condensed">
<thead class="">
<th>product&nbsp;Id</th>
<th>Product Name</th>
<th>Description</th>
<th>Sku</th>
<th>Qty</th>
<th>Cost</th>
<th>Price</th>
<th>Image Location</th>
<th>On&nbsp;Sale?</th>
<th>Featured?</th>
<th>New Product?</th>
</thead>
<tbody>
<?php
	$select_products = "SELECT * FROM products";
  	$myProducts = $mysqli->query($select_products);
while($row = $myProducts->fetch_object()){
echo "<tr>";
if($_SESSION['logged_in_user_access'] == 'admin'){
echo "<td><a href='deleteproduct.php?id=".$row->product_id."'><i class='icon-trash'></i></a>&nbsp;<a href='editproduct.php?id=".$row->product_id."'><i class='icon-pencil'></i></a>" .$row->product_id. "</td>";
}elseif($_SESSION['logged_in_user_access'] == 'superuser'){
echo "<td>" .$row->product_id. "</td>";
}
echo "<td>" .$row->product_name."</td>";
echo "<td>" .$row->description. "</td>";
echo "<td>" .$row->product_sku. "</td>";
echo "<td>" .$row->qty_stock. "</td>";
echo "<td>" .$row->cost."</td>";
echo "<td>" .$row->price."</td>";
echo "<td>" .$row->image_url."</td>";
//if the person accountable is not null display nothing
if($row->sale == NULL){	
	echo "<td>" . "" . "</td>";
}else{
	echo "<td>" . $row->sale. "</td>";	
}
if($row->featured == NULL){	
	echo "<td>" . "" . "</td>";
}else{
	echo "<td>" . $row->featured. "</td>";	
}
if($row->new == NULL){	
	echo "<td>" . "" . "</td>";
}else{
	echo "<td>" . $row->new. "</td>";	
}

echo "</tr>";
}
?>
</tbody>
</table>
<div class="pull-left">
<a class="btn btn-orange" href="insertproduct.php">Insert New Product</a>
</div><br><br>
<h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> Customers List</span></h1>
<table class="table table-striped table-bordered table-condensed">
<thead>
<?php
if($_SESSION['logged_in_user_access'] == 'admin'){
echo '<th>Edit</th>';
echo '<th>User Id</th>';
}else{
echo '<th>User Id</th>';
} ?>
<th>Username</th>
<th>Password</th>
<th>First Name</th>
<th>Last Name</th>
<th>E-Mail</th>
<th>Address 1</th>
<th>Address 2</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Telephone</th>
<th>Mobile</th>
<th>Company</th>
</thead>
<tbody>
<?php
	$select_customers = "SELECT * FROM users WHERE access_level = 'customer'";
  	$myCustomers = $mysqli->query($select_customers);
while($row = $myCustomers->fetch_object()){
echo "<tr>";
if($_SESSION['logged_in_user_access'] == 'admin'){
echo "<td><a href='deleteuser.php?id=".$row->user_id."'><i class='icon-trash'></i></a>&nbsp;<a href='edituser.php?id=".$row->user_id."'><i class='icon-pencil'></i></a></td>";
echo "<td>" .$row->user_id. "</td>";
}else{
echo "<td>" .$row->user_id. "</td>";
}
echo "<td>" .$row->username."</td>";
echo "<td>" .$row->password. "</td>";
echo "<td>" .$row->first_name. "</td>";
echo "<td>" .$row->last_name. "</td>";
echo "<td>" .$row->email."</td>";
echo "<td>" .$row->address1."</td>";
echo "<td>" .$row->address2."</td>";
echo "<td>" .$row->city."</td>";
echo "<td>" .$row->state."</td>";
echo "<td>" .$row->zip."</td>";
echo "<td>" .$row->telephone."</td>";
//if the field is NULL display nothing
if($row->mobile == NULL){	
	echo "<td>" . "" . "</td>";
}else{
	echo "<td>" . $row->mobile. "</td>";	
}
if($row->company == NULL){	
	echo "<td>" . "" . "</td>";
}else{
	echo "<td>" . $row->company. "</td>";	
}

echo "</tr>";
}
?>
</tbody>
</table>
<h1 class="heading1"><span class="maintext"> <i class="icon-signin"></i> Admins and Users List</span></h1>
<table class="table table-striped table-bordered table-condensed">
<thead>
<?php
if($_SESSION['logged_in_user_access'] == 'admin'){
echo '<th>Edit</th>';
echo '<th>User Id</th>';
}else{
echo '<th>User Id</th>';
} ?>
<th>Username</th>
<th>Password</th>
<th>First Name</th>
<th>Last Name</th>
<th>E-Mail</th>
<tbody>
<?php
	$select_users = "SELECT * FROM users WHERE access_level != 'customer'";
  	$myUsers = $mysqli->query($select_users);
while($row = $myUsers->fetch_object()){
echo "<tr>";
if($_SESSION['logged_in_user_access'] == 'admin'){
echo "<td><a href='deleteuser.php?id=".$row->user_id."'><i class='icon-trash'></i></a>&nbsp;<a href='edituser.php?id=".$row->user_id."'><i class='icon-pencil'></i></a></td>";
echo "<td>" .$row->user_id. "</td>";
}else{
echo "<td>" .$row->user_id. "</td>";
}
echo "<td>" .$row->username."</td>";
echo "<td>" .$row->password. "</td>";
echo "<td>" .$row->first_name. "</td>";
echo "<td>" .$row->last_name. "</td>";
echo "<td>" .$row->email."</td>"; ?>
</tr>
<?php } ?>
</tbody>
</table>
<div class="pull-left">
<?php if($_SESSION['logged_in_user_access'] == 'admin'){ ?>
<a href="insertuser.php" class="btn btn-orange">Insert New User</a>
<?php } ?>
</div>
          <div class="clearfix"></div>
          <br>
        </div>        
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69797602-1', 'auto');
  ga('send', 'pageview');
</script>
<?php } include('footer.php'); ?>