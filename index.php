
<?php
  include('dbconnection.php');

  if(isset($_POST['submit']))
  {
    //echo "hello";
    $uname=$_POST['uname'];
    $pass=$_POST['password'];
    $sql="select * from login where uname='$uname' and pwd='$pass'";
    $result=$con->query($sql);
    $nrows=mysqli_num_rows($result);
    if($nrows>0)
    {
      echo "hiiiii";
      $utype=mysqli_fetch_assoc($result);
      if($utype['utype']=="admin")
      {
        session_start();
        $_SESSION['UID']="1";
        $_SESSION['stat']="Active";
        header("Location:adminmain.php");

      }
		 if($utype['utype']=="user")
      {
        session_start();
        $_SESSION['UID']=$utype['Uid'];
        $_SESSION['stat']="Active";
        header("Location:usermain.php");

      }
    }

  }
?>

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
              <button type="button" class="navbar-toggle" data-toggle="collapse" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
           <!--  <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav ">
               <li><a href="usermain.php">Home</a></li>
                <li><a href="userappointment.php">Booking</a></li>
                <li><a href="App_history.php">Appointments</a></li>
                <li><a href="Services.php">Services</a></li><li><a href="productview.php">Product</a></li>
                <li><a href="Feedback.php">Feedback</a></li>
                <li><a href="Offers.php">Offers</a></li>
                <li><a href="Logout.php">Logout</a></li>
              </ul>

            </div><! -->

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
      <img src="userdesign/img/banner2.jpeg" alt="">
    
    </div>
    <div class="item">
      <img src="userdesign/img/banner3.jpeg" alt="">
      <div class="carousel-caption">
          <i class="fw-icon-pencil"></i>
        
        
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
            <li ><h1>Login </h1>
         <!--  <h4>Donec nec justo eget felis facilisis fermentum.<br> 
Aliquam porttit or mauris sit amet orci. Aenean dignissim pellentesque felis.</h4></li>
          </ul> -->
          
        </div>
      </div>
    <center>

      <form method="POST">
        <table  align="center" border="0">
          <tr>
            <td>USERNAME</td>
            <td><input type="text" name="uname" />  <br></td>
          </tr>
           <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password" /> <br></td>
          </tr>
           <tr>
            <td></td>
            <td align="center" colspan="2">
              <input type="submit" value="Submit" name="submit">
              <br>
            </td>
          </tr>
          
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
