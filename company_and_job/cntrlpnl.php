<?php 
session_start();
include('connection.php');
if(isset($_REQUEST['logout']))
{
  session_unset();
  session_destroy();
  echo "<script > location.href='cntrlpnl.php' </script>";
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="./CSS/cart.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #80ffaa">
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #001a00">
        <a id="logo" class="navbar-brand" href="cntrlpnl.php" style="margin-bottom: -6px;margin-top: -7px"><img src="./Image/logo.jpg" width="60px" height="40px"></a>
        <button type="button" id="nav1" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="nav">
          <ul class="navbar-nav" >
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold px-3" href="home.php">Home</a>
            </li> 
            <li class="nav-item dropdown" data-toggle="dropdown" data-hover="dropdown">
                <a  class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">Join With Us</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" onclick="organisation()" href="#">As Organisation</a>
                  <a class="dropdown-item" onclick="searcher()" href="#">As Searcher</a>
                  <!-- <a class="dropdown-item" onclick="truck()" href="#">Truck</a> -->
                </div>
            </li> 
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
                <a class="nav-link btn btn-info btn-sm font-weight-bold px-3 login" style="background-color: #80ffaa ;margin-right: 10px" href="#" id="<?php if(!isset($_SESSION['UNAME'])) echo 'myBtn'; else echo 'user_profile';?>"> 
                    
                        <?php 
                        if(isset($_SESSION['UNAME'])) 
                          echo "HELLO!".$_SESSION['UNAME']; 
                        else 
                          echo "<i class='fa fa-sign-in'></i> Sign Up/Login"; 
                        ?>
                </a>
              </li>
              <li class="nav-item ">  
                  <!-- <a class="nav-link font-weight-bold px-3"  href='cntrlpnl.php?logout=true' > -->
                    <?php if(isset($_SESSION['UNAME'])) echo "<a href='cntrlpnl.php?logout=true' class='nav-link btn btn-info btn-sm font-weight-bold px-3' style='background-color: #80ffaa '>Logout</a>"; ?>
                  <!-- </a> -->
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
              <button type="button" class="close" data-dismiss="modal" style="color: red ">×</button>
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
                      <!-- <a class="btn btn-info btn-sm font-weight-bold px-3" name="btn" style="width:100%; background-color: #80ffaa " type="submit" onclick="loginaction()">Login</a><br><br>
                      <script type="text/javascript">
                      
                          function loginaction(){
                            window.location.assign("login.php");
                            // alert("hii");
                          }
                      </script> -->
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
    </script><br><br>
    <!--Popup form end-->

    <div class="container text-light">
        <div class="card-deck justify-content-center">
            <div class="col-sm-10 card" style="background-color: #001a00">
                <h1>Join as an Organisation: <a type="button" class="btn btn-info btn-sm text-dark font-weight-bold" onclick="organisation()" style="width: 100px;background-color: #80ffaa">Click Here</a></h1>
                <h4><text>In Organisation, Organisation is looking for person who is fit for the organisation or not </text></h4>
            </div>
        </div>
    </div><br>
	<div class="container ">
        <div class="card-deck justify-content-center">
            <div class="col-sm-10 card abc" style="background-color: #001a00;display: none;">
                <h3 class="text-center" style="color: white">Enter here and let me help you</h3><br>
                <form action="company_register.php" method="post">
                    <div class="row register-form">
                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <input type="text" class="form-control" name="companyname" placeholder="Name of your company *" value="" required />
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="noofemployee" placeholder="No of employee in company*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="number" minlength="10" maxlength="10" name="noofvacancies" aria-pressed="false" autocomplete="off" class="form-control" placeholder="Total no. of vacancies *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="mySelect" name="select">
                                    <option class="hidden"  selected disabled>Types of vacancies</option>
                                    <option value="Type a">Type a</option>
                                    <option value="Type b">Type b</option>
                                    <option value="Type c">Type c</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="companyaddress" aria-pressed="false" autocomplete="off" placeholder="Address *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" aria-pressed="false" name="companyemail" autocomplete="off" placeholder="Your Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="companymob" aria-pressed="false" autocomplete="off" class="form-control" placeholder="Your Mobile *" value="" />
                            </div>
                            <input type="submit" class="btn btn-info btn-sm font-weight-bold px-3 btnRegister" style="color:#001a00;background-color: #80ffaa" name="submit_as_organisation" value="Register"/>
                        </div>
                    </div>
                </form>                             
            </div>
        </div>
    </div><br>
    <div class="container text-light">
        <div class="card-deck justify-content-center">
            <div class="col-sm-10 card" style="background-color: #001a00">
                <h1>Join as an Searcher: <a type="button" class="btn btn-info btn-sm text-dark font-weight-bold " onclick="searcher()" style="width: 100px;background-color: #80ffaa">Click Here</a></h1>
                <h4><text>Searcher is looking for an organisation who is fit for the job </text></h4>
            </div>
        </div>
    </div><br>
    <div class="container ">
        <div class="card-deck justify-content-center">
          <div class="col-sm-4 card abc1" style="background-color: #001a00;display: none;">
            <h3 class="text-center" style="color: white">Enter As Searcher</h3><br>
            <form action="company_register.php" method="post">
              <div class="col-sm-12 text-center ">
                  <div class="form-group">
                      <input type="text" class="form-control" name="searchername" placeholder="Name of Searcher *" value="" required />
                  </div>
                  <div class="form-group">
                      <input type="text" minlength="10" maxlength="10" name="searchermob" aria-pressed="false" autocomplete="off" class="form-control" placeholder="Your Mobile *" value="" />
                  </div>
                  <input type="submit" class="btn btn-info btn-sm font-weight-bold px-3 btnRegister" style="color:#001a00;background-color: #80ffaa" name="submit_as_searcher" value="Register"/>
              </div>
              <br>
            </form>                       
          </div>
        </div>
    </div><br><br>
    <script type="text/javascript">
        function organisation(){
          // window.location.assign("cars.php");
          $(".abc").show("600");
          $(".abc1").hide("300");
        }
        function searcher(){
          // window.location.assign("#");
          $(".abc").hide("300");
          $(".abc1").show("600");
        }
    </script>
    <div class="footer" style="background-color: #001a00;height: 100px;">
        <h1 class="text-light font-weight-bold px-3">This is Footer</h1>
    </div>
</body>
</html>