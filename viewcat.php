<?php
 include('dbconnection.php');
$heading="View Category";
$content="Hello";
if(isset($_POST['submit']))
{
	
	
	$prod_name=$_POST["prod_name"];
		$cat_name=$_POST["cat_id"];
	      $prod_img= basename($_FILES["prod_img"]["name"]);

      $ext = pathinfo( $prod_img, PATHINFO_EXTENSION);
	$fnn=date("YmdHis").".".$ext;
	 $target_dir = "uploads/";
      // $target_file = $target_dir . basename($_FILES["file1"]["name"]);
      $target_file = $target_dir.$fnn;
      if (move_uploaded_file($_FILES["prod_img"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["file1"]["name"])). " has been uploaded.";
          // echo "<script>alert('ok')</script>";
        }
        else
        {
          // echo "<script>alert('error')</script>";
        }

	
		$prod_price=$_POST["prod_price"];
		$prod_qty=$_POST["prod_qty"];
		$prod_details=$_POST["prod_details"];
		
	
	
	$sql="INSERT INTO `product` (`id`, `image`, `name`, `Catagory`, `price`, `quantity`, `details`) VALUES (NULL, '$target_file', '$prod_name', '$cat_name', '$prod_price', '$prod_qty', '$prod_details');";
	$result=$con->query($sql);
	if($result)
	{
?>
<script>
alert("Record added succesfully!");
</script>

<?php
	}
	
	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>All Template Needs</title>

    <!-- Bootstrap core CSS -->
    <link href="userdesign/css/bootstrap.css" rel="stylesheet">
    <link href="userdesign/css/custom-styles.css" rel="stylesheet">
    <link href="userdesign/css/image-effects.css" rel="stylesheet">
	
	   <link href="userdesign/css/normalize.css" rel="stylesheet">
		 <link href="userdesign/css/component.css" rel="stylesheet">
      <link rel="userdesign/stylesheet" href="css/font-awesome.css">
      <link rel="userdesign/stylesheet" href="css/font-awesome-ie7.css">
	  
    <script src="userdesign/js/html5shiv.js"></script>
      <script src="userdesign/js/respond.min.js"></script>
	  <script src="userdesign/js/modernizr.custom.js"></script>
 
  </head>

  <body>
     <div class="container page-styling">
    <div class="header-wrapper">
     <!--  <div class="site-name">
        <h1>sitename</h1>
      </div> -->
      <div class="menu">
        <div class="navbar">
         
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav ">
                <li><a href="#">Offers</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Bookings</a></li>
                <li><a href="viewcat.php">Category</a></li><li><a href="productview.php">Product</a></li>
                <li><a href="Feedback.php">Order</a></li>
                <li><a href="Offers.php">Feedback</a></li>
                <li><a href="Logout.php">Reports</a></li>
              </ul>

            </div><!--/.navbar-collapse -->

          </div>
         
      </div>
      <div class="banner">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item">
      <img src="userdesign/img/banner3.jpeg" alt="">
    
    </div>
    <div class="item">
      <img src="userdesign/img/banner2.jpeg" alt="">
      <div class="carousel-caption">
          <i class="fw-icon-pencil"></i>
        <h2>Corem ipsum</h2>
        <h1>sit amet vivamus</h1>
        <a href="#" class="btn"> more info</a>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
      </div>
      <div class="content-wrap">
        <div class="main-title">
          <ul class="grid effect-8" id="grid">
            <li ><h1><?php echo $heading;?></h1>
         <!--  <h4>Donec nec justo eget felis facilisis fermentum.<br> 
Aliquam porttit or mauris sit amet orci. Aenean dignissim pellentesque felis.</h4></li>
          </ul> -->
          
        </div>
      </div>
<center>
      
       <form action="" method="post"  enctype="multipart/form-data">
		    <table border="0">
				
					<?php
	$sql="select*from category";
	$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	
	
  while($row = $result->fetch_assoc()) {
   echo "<tr><td><a href='productview.php?categoryname=".$row['category_name']."'>".$row['category_name']."</a></td></tr>";
  }
	
} else {
  echo "0 results";
}
	?></td></tr>
		
				 </table>
		   
		   </form>
     
</center>   
    

     


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="userdesign/js/jquery-1.9.1.js"></script>
    <script src="userdesign/js/bootstrap.js"></script>
    <script src="userdesign/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
     <script src="userdesign/js/masonry.pkgd.min.js"></script>
    <script src="userdesign/js/imagesloaded.js"></script>
    <script src="userdesign/js/classie.js"></script>
    <script src="userdesign/js/AnimOnScroll.js"></script>
    
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>

    
  </body>
</html>
