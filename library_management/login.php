<?php
session_start();

$con=mysqli_connect('localhost','root','','brm_db',"3308");
$m=mysqli_select_db($con,'ecommerce');


if(isset($_POST['btn']))
{
  $uname1=$_POST['username'];
  $upassword1=$_POST['upassword'];
  if(!isset($_SESSION['UNAME']))
{
  if($uname1 && $upassword1)
  {
    $p1="SELECT * from uregistration where name='$uname1' AND upassword='$upassword1'";
    $result1 = mysqli_query($con,$p1);
    $row=mysqli_fetch_array($result1);
    if(mysqli_num_rows($result1))
    {
        $_SESSION['UNAME']=$uname1;
        $_SESSION['UPASS']=$upassword1;
        echo '<script type="text/javascript">';
        echo ' alert("login successfully...")'; 
        echo '</script>';
        //echo 'Welcome!<b>'.$row['username']. "</b> you are in...";
        echo "<script > location.href='home.php' </script>";
    }
    else
    {
        echo '<script type="text/javascript">';
        echo ' alert("Wrong username or password...")'; 
        echo '</script>';
    }
  }
  else
  {
      echo '<script type="text/javascript">';
      echo ' alert("You have inserted wrong information...")'; 
      echo '</script>';
  }
}
elseif($_SESSION['UNAME']==$uname1 and $_SESSION['UPASS']==$upassword1)
{
  //echo "You have intered wrong username or password";
  echo '<script type="text/javascript">';
  echo ' alert("already loged in..")'; 
  echo '</script>';
  // echo "<script > location.href='product.php' </script>";
}
else{
  //echo '<b>'.$uname1."</b> you are already login";
  echo "<script > location.href='home.php' </script>";
}
}


if(isset($_REQUEST['logout']))
{
  session_unset();
  session_destroy();
  echo "<script > location.href='home.php' </script>";
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="./CSS/cart.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

<style >
      .zoom:hover {
        transform: scale(1.06); 
      }
      .zoom {
        transition: transform .3s;
        margin: 0 auto;
      }
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


<h2 style="text-align: center;">Login Form</h2>
 <br>
<div class="container " >
    <div class="col-sm-6 card-login mx-auto text-center bg-light" style="height: 350px">
        <div class="card-header mx-auto">
            <!-- <span> <img src="https://amar.vote/assets/img/amarVotebd.png" class="w-50" alt="Logo"> </span><br/> -->
            <span class="logo_title mt-5 text-primary font-weight-bold px-3"> Login Dashboard </span>
        </div><br>
        <div class="card-body">
            <form action="login.php" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" ><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="upassword" class="form-control" placeholder="Password">
                </div>    <br>  <br>
                <div class="text-center">
                    <div class="form-group form-check float-left">
                        <input class="form-check-input " type="checkbox" name="remember"> Remember me   
                    </div>
                    <!-- /*/*<span style="padding-right: 310px"> </span>*/*/ -->
                    <div class="form-group float-right">
                        <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
                    </div>
                </div>   <br><br>
                <div class="text-align">
                    <div class="form-group form-check float-left">
                        <label style="margin-left: -20px;"> New User?<a href="register.php">Register</a></label>
                        <!-- /*<span style="display:inline-block; width: 200px;"></span>*/ -->
                    </div>
                    <!-- /*/*<span style="padding-right: 310px"> </span>*/*/ -->
                    <div class="form-group float-right">
                        <label style="margin-right: -60px;" class="psw">Forgot <a href="#">password?</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
