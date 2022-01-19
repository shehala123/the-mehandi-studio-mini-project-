
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
    <div class="item active">
      <img src="userdesign/img/banner-img.jpeg" alt="" class="">
      
    </div>
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
            <li ><h1>Welcome Admin, Please choose the options</h1>
         <!--  <h4>Donec nec justo eget felis facilisis fermentum.<br> 
Aliquam porttit or mauris sit amet orci. Aenean dignissim pellentesque felis.</h4></li>
          </ul> -->
          
        </div>
      </div>
<center>
       <table>
        <tr>
          <td><a href="addcat.php">Add Category</a></td>
		   </tr>
		       <tr>
          <td><a href="viewcat.php">View Category</a></td>
		   </tr>
		   
		   
		   <tr>
			<td><a href="editcat.php">Edit Category</a></td>
		   </tr>
		   <tr>
			<td><a href="remcat.php">Remove Category</a></td>
	</tr>
		   <tr>
          <td><a href="addprod.php">Add Product</a></td>
		  </tr>
		   <tr>
          <td><a href="productview.php">View Product</a></td>
		  </tr>
		   		   <tr>
          <td><a href="editprod.php">Edit Products</a></td>
		  </tr>
		   <tr>
			 <td><a href="remprod.php">Remove Product</a></td>
        </tr>
      </table>
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
