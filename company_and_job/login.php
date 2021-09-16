<?php
session_start();

// $con=mysqli_connect('localhost','root','','ecommerce',"3308");
// $m=mysqli_select_db($con,'ecommerce');

include('connection.php');

if(isset($_POST['btn']))
{
  $uname1=$_POST['username'];
  $upassword1=$_POST['upassword'];
  if(!isset($_SESSION['UNAME']))
  {
    if($uname1 && $upassword1)
    {
      $p1="SELECT * from user_registration where username='$uname1' AND password='$upassword1'";
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
          echo "<script > location.href='login.php' </script>";
      }
      else
      {
          echo '<script type="text/javascript">';
          echo ' alert("Wrong username or password...")'; 
          echo '</script>';
          //echo "You have intered wrong username or password";
          // echo "<script > location.href='login.php' </script>";
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
    echo "<script > location.href='login.php' </script>";
  }
}


if(isset($_REQUEST['logout']))
{
  session_unset();
  session_destroy();
  echo "<script > location.href='login.php' </script>";
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
</head >
<body style="background-color: #80ffaa">
  <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #001a00">
        <a id="logo" class="navbar-brand" href="cntrlpnl.php" style="margin-bottom: -6px;margin-top: -7px"><img src="./Image/logo.jpg" width="60px" height="40px"></a>
        <button type="button" id="nav1" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="nav">
          <ul class="navbar-nav" >
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold px-3" href="cntrlpnl.php">Home</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold px-3" href="cntrlpnl.php">Join With Us</a>
            </li>
            <!-- <li class="nav-item dropdown" data-toggle="dropdown" data-hover="dropdown">
                <a  class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">Join With Us</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" onclick="organisation()" href="#">As Organisation</a>
                  <a class="dropdown-item" onclick="searcher()" href="#">As Searcher</a>
                  <-- <a class="dropdown-item" onclick="truck()" href="#">Truck</a> --
                </div>
            </li> -->  
            <li class="nav-item dropdown" data-toggle="dropdown" data-hover="dropdown">
                <a  class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">More</a>
                <div class="dropdown-menu">
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
            </script>
            <script type="text/javascript">
              function organisation(){
                window.location.assign("cars.php");
              }
              function searcher(){
                window.location.assign("#");
              }
              function truck(){
                window.location.assign("#");
              }
              function about(){
                window.location.assign("#");
              }
              function developer(){
                window.location.assign("#");
              }
            </script>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="nav-link btn btn-info btn-sm font-weight-bold px-3 login" style="background-color: #80ffaa ;margin-right: 10px;" href="#" id="<?php if(!isset($_SESSION['UNAME'])) echo 'myBtn'; else echo 'user_profile';?>"> 
                    <?php 
                    if(isset($_SESSION['UNAME'])) 
                      echo "HELLO!".$_SESSION['UNAME']; 
                    else 
                      echo "<i class='fa fa-sign-in'></i> Sign Up/Login"; 
                    ?>
                </a>
              </li>
              <li class="nav-item ">  
                 <!--  <a class="nav-link font-weight-bold px-3" href='login.php?logout=true' >
                      <php if(isset($_SESSION['UNAME'])) echo "LOGOUT"; ?>
                  </a> -->
                  <?php if(isset($_SESSION['UNAME'])) echo "<a href='login.php?logout=true' class='nav-link btn btn-info btn-sm font-weight-bold px-3' style='background-color: #80ffaa '>Logout</a>"; ?>
              </li>
          </ul>
        </div>
    </nav><br><br><br>

    <script>
      $(document).ready(function(){
        $("#user_profile").click(function(){
          window.location.href = "user_profile.php";
       });
      });
    </script>
    <!--Popup form start-->
    <div class="container mt-3"> 
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" style="height: 550px;">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Login Heading</h4>
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" >
              <form  action="login.php" method="post" >
                  <div class="table">
                      <p for="username"><b>Username:</b></p>
                      <p><input type="text" style="width:100%;" placeholder="Enter Username" name="username" required></p>
                      <p for="psw"><b>Password:</b></p>
                      <p><input type="password" style="width:100%;" placeholder="Enter Password" name="upassword" required></p><br>
                      <button class="b1" style="width:100%;" name="btn" type="submit" id="myBtn1" onclick="action();">Login</button><br><br>
                      <label><input type="checkbox" checked="checked" name="remember"> Remember me </label>
                      <span style="display:inline-block; width: 200px;"></span>
                      <label> New User?<a href="register.php">Register</a></label>
                </div>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <span style="display:inline-block; width: 260px;"></span>
              <span class="psw">Forgot <a href="forgot_page.php">password?</a></span>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $("#myModal").modal();
     });
    });
    </script>
  <!--Popup form end-->
  <h2 style="text-align: center;">Login Form</h2>
  <br>
  <div class="container" >
      <div class="col-sm-6 card mx-auto text-center" style="height: 350px;background-color: #001a00">
          <div class="card-header mx-auto ">
              <span class="logo_title mt-5 font-weight-bold px-3" style="color: #80ffaa"> Login Dashboard </span>
          </div>
          <div class="card-body">
              <form action="login.php" method="post">
                  <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" ><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" name="username" class="form-control" placeholder="Username">
                  </div><br>
                  <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" name="upassword" class="form-control" placeholder="Password">
                  </div><br>      
                  <div class="text-center">
                      <div class="form-group form-check float-left" style="color:white;">
                          <input class="form-check-input" type="checkbox"  name="remember"> Remember me   
                      </div>
                      <div class="form-group float-right">
                          <input type="submit" name="btn" value="Login" style="background-color: #80ffaa" class="btn btn-outline-danger float-right login_btn">
                      </div>
                  </div>        
              </form>
          </div>
      </div>
  </div><br><br>
  <div class="footer" style="background-color: #001a00;height: 100px;">
    <h1 class="text-light font-weight-bold px-3">This is Footer</h1>
  </div>
</body>
</html>
