
<?php
 include('dbconnection.php');
$heading="Add Product";
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
		window.location.href = 'admin_home.php';
</script>

<?php
	}
	
	
}
?>




<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>THE MEHANDI STUDIO</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo design/logo1.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                       <!--  <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
							<option>¥ JPY</option>
							<option>$ USD</option>
							<option>€ EUR</option>
						</select> -->
                    </div>
                    <div class="right-phone-box">
                        <!-- <p>Call US :- <a href="#"> +11 900 800 100</a></p> -->
                    </div>
                    <div class="our-link">
                        <!-- <ul>
                            <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
						<!-- <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
							<option>Register Here</option>
							<option>Sign In</option>
						</select> -->
					</div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <!-- <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <?php include('admin_menu.php');?>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Product</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                       <!--  <h2>GET IN TOUCH</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p> -->
       <form action="" method="post"  enctype="multipart/form-data">
		    <table border="0">
				<tr><td> Name </td><td><input name="prod_name" type="text" autofocus="autofocus" required="required" class="form-control"></td></tr>
				<tr><td>Category</td><td>
					<?php
	$sql="select*from category";
	$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	
	echo "<select name='cat_id'>";
  while($row = $result->fetch_assoc()) {
   echo "<option value =".$row['category_name'].">".$row['category_name']."</option>";
  }
	echo "</select>";
} else {
  echo "0 results";
}
	?></td></tr>
				<tr><td>Image </td><td><input name="prod_img" type="file"></td></tr>
				<tr><td>Price </td><td><input name="prod_price" type="text"  required="required" class="form-control"></td></tr>
				<tr><td>Quantity </td><td><input name="prod_qty" type="text" required="required" class="form-control"></td></tr>
				<tr><td>Details </td><td><textarea name="prod_details" class="form-control"></textarea></td></tr>
				<tr><td></td><td><input type="submit" name="submit"></td></tr>
				 </table>
		   
		   </form>
                    </div>
                </div>
				<!-- <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 9000 <br>Preston Street Wichita,<br> KS 87213 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/background image/a.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/indian design/z.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/background image/b.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/arabic design/a.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/indian design/b.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/indian design/c.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/indian design/d.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/indian design/e.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/indian design/f.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/indian design/g.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Freshshop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: SHEHLA AKBAR <br>KOYILANDY,CALICUT,<br> 673305 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91-7306601543">+91-7306601543</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:themehandistudio@gmail.com">themehandistudio@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <!-- <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div> -->
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>