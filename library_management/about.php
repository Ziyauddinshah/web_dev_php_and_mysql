<!DOCTYPE html>
<html>
<head>
	<title>About Page</title>
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
	       /*.container abc{
	      	 background-image: url('http://localhost/BRM/Image/library.jpg');
	       }*/
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

<!-- <div class="container mt-3"> 
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="height: 500px;">
        <div class="modal-header">
          <h4 class="modal-title">Login Heading</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body" >
          <form  action="login.php" method="post" >
              <div class="table">
                  <p for="username"><b>Username:</b></p>
                  <p><input type="text" style="width:100%;" placeholder="Enter Username" name="username" required></p>
                  <p for="psw"><b>Password:</b></p>
                  <p><input type="password" style="width:100%;" placeholder="Enter Password" name="upassword" required></p><br>
                  <button class="b1" style="width:100%;" type="submit" id="myBtn1" onclick="action();">Login</button><br><br>
                  <label><input type="checkbox" checked="checked" name="remember"> Remember me </label>
                  <span style="display:inline-block; width: 200px;"></span>
                  <label> New User?<a href="register.php">Register</a></label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <span style="display:inline-block; width: 260px;"></span>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </div>
    </div>
  </div>  
</div> -->

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
  	// alert('login');
  	window.location.assign('login.php');
    // $("#myModal").modal();
 });
});
</script>
<br><br>
<div class="container bg-light" style="border-radius: 2%">
	<div class="card-deck justify-content-center  ">	
		<div class="col-sm-4 text-center">
			<br><br><br>
			<img src="http://localhost/BRM/Image/ziyauddin.jpg" width="200px" height="250px" style="border-radius: 30%">
		</div><br>
		<div class="col-sm-6 "><br>
			<h1 class="text-center">About Me</h1>
			<br><br>
			<h3 class="text-center">I am a web developer. I have built 2 more fully dynamic and responsive website. Motivation behind building this website is to enhance my skills and know more letest technology in the field of web development. </h3><br><br>
			<div>
				<h4 style="color: blue;">Contact me:</h6>
				<h6>Mobile No: +91 8890571069</h6>
				<h6>Email address: ziyazindagi1999@gmail.com</h6>
			</div>
		</div><br>
	</div>
	<br>
</div>
<br><br>
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
                  <a href="#"><i class="fa fa-instagram"  style="font-size: 30px;margin-right: 15px"></i></a> 
                  <a href="#"><i class="fa fa-pinterest"  style="font-size: 30px;margin-right: 15px"></i></a>
              </p>
              </div>
              <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
                <h3>About</h3>
                <p><a href="#">Our Team</a></p>
                <p><a href="#">Projects</a> </p>
                <p><a href="about.php">About Us</a> </p>
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
        </div>
    </div>
  </div>
</footer>
</body>
</html>