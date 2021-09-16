<?php
session_start();


if(isset($_SESSION['UNAME']))
{
	$username=$_SESSION['UNAME'];
}
else
{
	$username="sir";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>book_user_profile</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" type="text/css" href="./CSS/cart.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	 <style>
	      .nav-item{
	         padding-right: 15px;  
	      }
	 </style>
</head>
<body style="background-color: #03B9DF;">
<nav class="navbar navbar-expand-md navbar-light bg-info fixed-top" >
    <a id="logo" class="navbar-brand" href="home.php" style="margin-bottom: -6px;margin-top: -7px"><img src="http://localhost/BRM/Image/logo.jpg" alt="logo" width="60px" height="40px"></a>
    <button type="button" id="nav1" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="nav">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link text-light font-weight-bold px-3" href="home.php">HOME</a>
        </li> 
        <li class="nav-item dropdown" data-toggle="dropdown" data-hover="dropdown">
            <a  class="nav-link text-light font-weight-bold px-3 dropdown-toggle" id="drop" href="#">OPERATIONS</a>
            <div class="dropdown-menu" aria-labelledby="drop">
              <a class="dropdown-item" onclick="insert()" href="#">Insert</a>
              <a class="dropdown-item" onclick="delete1()" href="#">Delete</a>
              <a class="dropdown-item" onclick="update()" href="#">Update</a>
              <a class="dropdown-item" onclick="view()" href="#">View</a>
            </div>
        </li>
        <li class="nav-item dropdown" data-toggle="dropdown" data-hover="dropdown">
            <a  class="nav-link text-light font-weight-bold px-3 dropdown-toggle" id="drop" href="#">MORE</a>
            <div class="dropdown-menu" aria-labelledby="drop">
              <a class="dropdown-item" onclick="about()" href="#">About Us</a>
              <a class="dropdown-item" onclick="developer()" href="#">Developer</a>
            </div>
        </li>  
        <script type="text/javascript">
                  $('ul li').hover(function() {
                  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
                }, function() {
                  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
                });
                  function about(){
                    window.location.assign('about.php');
                    // alert("hii");
                  }
                  function developer(){
                    window.location.assign('developer.php');
                    // alert("hii");
                  }
                  function insert(){
                    window.location.assign('insertForm.php');
                  }
                  function delete1(){
                    window.location.assign('deleteForm.php');
                  }
                   function update(){
                    window.location.assign('updateForm.php');
                  }
                   function view(){
                    window.location.assign('viewForm.php');
                  }
        </script>
      </ul>
      <ul class="navbar-nav" >
        <li class="nav-item " id="pull">  
            <a class="nav-link text-light  font-weight-bold px-3 login " href="#" id="<?php if(!isset($_SESSION['UNAME'])) echo 'myBtn'; else echo 'user_profile';?>"> 
              <?php 
              if(isset($_SESSION['UNAME'])) 
                echo "HELLO!".$_SESSION['UNAME']; 
              else 
                echo "LOGIN"; 
              ?>
            </a>
        </li>
        <li class="nav-item ">  
            <a class=" nav-link text-light font-weight-bold px-3" href='home.php?logout=true' >
                <?php if(isset($_SESSION['UNAME'])) echo "LOGOUT"; ?>
            </a>
        </li>
      </ul>
    </div>
</nav><br><br><br>
<script>
  $(document).ready(function(){
    $("#user_profile").click(function(){
      window.location.href = "book_user_profile.php";
   });
  });
</script>

<h2>Welcome to user proile</h2>
<div class="col-sm-12 card" style="background-color: blue;">
  
</div>
<br>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-4 mb-3">
            <div class="card mb-3 ">
                <div class="card-body" style="height: 250px">
                    <h5 class="card-title">Welcome User</h5><hr>
                    <img class="mySlides" src="http://localhost/BRM/Image/logo.jpg" style="text-align:center ;border-radius: 50% ;height: 120px;width:150px"><b>  Hii <?php echo $username;?></b>
                </div>
            </div>
            <div class="card mb-3 " style="height: 375px;">
                <div class="card-body" >
                  <ul>
                    <h3>Content</h3><br>
                    <li><a href="edit_info.php">Edit Information</a></li>
                    <li><a href="personal_info.php">Personal Information</a></li>
                    <li><a href="my_order.php">My Order</a></li>
                    <li><a href="payment.php">Payment </a></li>
                    <li><a href="wishlist.php">Wishlist</a></li>
                  </ul>
                </div>
            </div>
        </div> 
        <div class="col-sm-6 col-lg-8 mb-3">
            <div class="card mb-3 ">
                <div class="card-body" >
                	This is very talented teacher
                    <!-- <div>Name:<h4 ><?php echo $row1['name'];?></h4></div><hr>
                    <div>Last name:<h4 ><?php echo $row1['lastname'];?></h4></div><hr><br>
                    <div>Date of Birth: <h4 ><?php echo $row1['udob'];?></h4></div><hr><br>
                    <div>Gander:<h4><?php echo $row1['gander'];?></h4></div><hr><br>
                    <div>Mobile No:<h4><?php echo $row1['umob'];?></h4></div><hr><br>
                    <div>Email Address:<h4><?php echo $row1['uemail'];?></h4></div><hr><br>
                    <div><b>Address:</b>
                      <div>Village/Area: <label><h5><?php echo $row1['village'];?></h5></label></div>
                      <div>Town: <label><h5><?php echo $row1['town'];?></h5></label></div>
                      <div>Pin No: <label><h5><?php echo $row1['pinno'];?></h5></label></div>
                      <div>District: <label><h5><?php echo $row1['district'];?></h5></label></div>
                      <div>State: <label><h5><?php echo $row1['state'];?></h5></label></div>
                    </div>      -->
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer" >
  <div class="footer-top" style="background-color: pink;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4 footer-about wow fadeInUp">
          <!-- <img class="logo-footer" src="./Image/water.jpg" style="border-radius: 45%;" width="100px" height="100px" alt="logo-footer" data-at2x="assets/img/logo.png"> -->
          <h3>Company</h3>
          <p>
            We are a young company always looking for new and creative ideas to help you with our products in your everyday work.
          </p>
          <p><a href="#">Our Awards</a></p>
              </div>
        <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
              <h3>Contact Us</h3>
              <p><i class="fa fa-map-marker-alt"></i> Lucknow,India 226021</p>
              <p><i class="fa fa-phone"></i> Phone: +91 889051069</p>
              <p><i class="fa fa-envelope"></i> Email: <a href="mailto:hello@domain.com">ziyazindagi1999@gmail.com</a></p>
              
              <h3>Follow us</h3>
              <p>
                  <a href="#"><i class="fa fa-facebook" style="font-size: 30px;margin-right: 15px"></i></a> 
                  <a href="#"><i class="fa fa-twitter" style="font-size: 30px;margin-right: 15px"></i></a> 
                  <!-- <a href="#"><i class="fa fa-google-plus-g"  style="font-size: 20px;"></i></a>  -->
                  <a href="#"><i class="fa fa-instagram"  style="font-size: 30px;margin-right: 15px"></i></a> 
                  <a href="#"><i class="fa fa-pinterest"  style="font-size: 30px;margin-right: 15px"></i></a>
              </p>
              </div>
              <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
                <h3>About</h3>
                <p><a href="#">Our Team</a></p>
                <p><a href="#">Projects</a> </p>
                <p><a href="#">About Us</a> </p>
              </div>
        </div>
    </div>
  </div>
  <div class="footer-bottom" style="background-color: #F6DDCC;">
    <div class="container">
      <div class="row">
          <div class="col-md-12 footer-copyright float-right" >
                <p>© 2020 Copyright: Bootstrap Footer Template by <a href="https://azmind.com">Ziyashah</a></p>
          </div>
          <!-- <div class="col-md-7 footer-menu">
              <nav class="navbar navbar-dark navbar-expand-md">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="#top-content">Top</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="#section-1">Section 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="#section-2">Section 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="#section-3">Section 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="#section-4">Section 4</a>
                        </li>
                    </ul>
                </div>
              </nav>
          </div> -->
        </div>
    </div>
  </div>
</footer>
</body>
</html>