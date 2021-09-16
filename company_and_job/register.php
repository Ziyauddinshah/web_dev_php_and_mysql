<?php
session_start();

include('connection.php');


if(isset($_SESSION['UNAME']))
{
  echo "user already logedin";
}
else
{
    if(isset($_POST['submit']))
    {
         $username=$_POST['username'];
         $email=$_POST['email'];
         $mob=$_POST['mob'];
         $dob=$_POST['dob'];
         $password=$_POST['password'];
         // $ucnfrmpswrd=$_POST['ucnfrmpswrd'];
        
          // echo $_SESSION['UPASS'];
          // echo $username;echo $email;echo $mob;echo $dob;echo $password;
          $p="SELECT *from user_registration where username='$username'";
          $result = mysqli_query($con,$p);
          if(mysqli_num_rows($result)>0)
          {
               echo '<script type="text/javascript">';
               echo ' alert("Username already exist...")'; 
               echo '</script>';
               echo "User already exist try another username";
          }
          else
          {
               $_SESSION['UNAME']=$username;
               $_SESSION['UPASS']=$password;
               $q="INSERT INTO user_registration(username,email,mobile,dob,password) 
               values('$username','$email','$mob','$dob','$password')";
               $q1=mysqli_query($con,$q);
               if($q1) echo '<script> alert("registered successfully.."); </script>';
               else echo '<script> alert("registration failed..."); </script>';
          // echo '<script> alert("set"); </script>';
          }
         // }
         // else{
         //      // echo "Oops1.</br>";
         //      // echo "Your password does not match confirm password again";
         //      echo '<script> alert("login first"); 
         //            window.location.assign("login.php");
         //      </script>';
         // }

    }
}



if(isset($_REQUEST['logout']))
{
  session_unset();
  session_destroy();
  echo "<script > location.href='register.php' </script>";
}


mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
      /*.nav-item{
          padding-right: 15px;  
        }
      .register{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
      }*/
      /*.register-left{
          text-align: center;
          color: #fff;
          margin-top: 4%;
      }*/
      /*.register-left input{
          border: none;
          border-radius: 1.5rem;
          padding: 2%;
          width: 60%;
          background: #80ffaa;
          font-weight: bold;
          color: #383d41;
          margin-top: 30%;
          margin-bottom: 3%;
          cursor: pointer;
      }
      .register-right{
          background: #f8f9fa;
          border-top-left-radius: 10% 0%; 
          border-bottom-left-radius: 10% 0%;
      }*/
      .abc img{
          margin-top: 15%;
          margin-bottom: 5%;
          margin-left: 95px;
          width: 25%;
          /*background-color: #80ffaa;*/
          /*filter: grayscale(100%); */
          -webkit-animation: mover 2s infinite  alternate;
          animation: mover 1s infinite  alternate;
      }
      @-webkit-keyframes mover {
          0% { transform: translateY(0); }
          100% { transform: translateY(-20px); }
      }
      @keyframes mover {
          0% { transform: translateY(0); }
          100% { transform: translateY(-20px); }
      }
      /*.register-left p{
          font-weight: lighter;
          padding: 12%;
          margin-top: -9%;
      }
      .register .register-form{
          padding: 10%;
          margin-top: 10%;
      }*/
      /*.btnRegister{
          float: right;
          margin-top: 10%;
          border: none;
          border-radius: 1.5rem;
          padding: 2%;
          background: #0062cc;
          color: #fff;
          font-weight: 600;
          width: 50%;
          cursor: pointer;
      }
      .register .nav-tabs{
          margin-top: 3%;
          border: none;
          background: #0062cc;
          border-radius: 1.5rem;
          width: 28%;
          float: right;
      }
      .register .nav-tabs .nav-link{
          padding: 2%;
          height: 34px;
          font-weight: 600;
          color: #fff;
          border-top-right-radius: 1.5rem;
          border-bottom-right-radius: 1.5rem;
      }
      .register .nav-tabs .nav-link:hover{
          border: none;
      }*/
      /*.register .nav-tabs .nav-link.active{
          width: 100px;
          color: #0062cc;
          border: 2px solid #0062cc;
          border-top-left-radius: 1.5rem;
          border-bottom-left-radius: 1.5rem;
      }
      .register-heading{
          text-align: center;
          margin-top: 8%;
          margin-bottom: -15%;
          color: #495057;
      }*/
  </style>
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
                </div>
            </li>  -->
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
              <!-- <li style="margin-right: 15px;"><a class="nav-link btn btn-info btn-sm font-weight-bold px-3 login" style="background-color: #80ffaa " href="register.php"><i class="fa fa-user"></i> Sign Up</a></li> -->
              <li><a class="nav-link btn btn-info btn-sm font-weight-bold px-3 login" style="background-color: #80ffaa ;margin-right: 10px;" href="#" id="<?php if(!isset($_SESSION['UNAME'])) echo 'myBtn'; else echo 'user_profile';?>"> 
                    <?php 
                    if(isset($_SESSION['UNAME'])) 
                      echo "HELLO!".$_SESSION['UNAME']; 
                    else 
                      echo "<i class='fa fa-sign-in'></i> Sign Up/Login"; 
                    ?>
                  </a>
              </li>
              <li class="nav-item ">  
                  <?php if(isset($_SESSION['UNAME'])) echo "<a href='register.php?logout=true' class='nav-link btn btn-info btn-sm font-weight-bold px-3' style='background-color: #80ffaa '>Logout</a>"; ?>
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
  <br><br><br>
  <div class="container ">
      <!-- <div class="row"> -->
        <div class="card-deck justify-content-between">
          <div class="col-sm-3 card text-light abc" style="background-color: #001a00">
              <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
              <h3>Welcome</h3>
              <p>You are 30 seconds away from earning your own money!</p>
              <input type="submit" class="btn btn-sm font-weight-bold px-3" name="" onclick="goto()" value="Login" style="background-color: #80ffaa" /><br/>
              <script type="text/javascript">
                   function goto(){
                      window.location.assign("login.php");
                   }
              </script>
          </div>
          <div class="col-sm-9 card text-light " style="background-color: #001a00">
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <h3 class="register-heading">Register and be Friend</h3>
                      <form action="register.php" method="post">
                          <div class="row register-form">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="text" class="form-control" name="username" placeholder="Userame *" value="" required />
                              </div>
                              <div class="form-group">
                                  <input type="date" class="form-control" name="dob" placeholder="Date Of Birth *" value="" />
                              </div>  
                              <div class="form-group">
                                  <input type="email" class="form-control" aria-pressed="false" name="email" autocomplete="off" placeholder="Your Email *" value="" />
                              </div>
                              <div class="form-group">
                                  <input type="text" minlength="10" maxlength="10" name="mob" aria-pressed="false" autocomplete="off" class="form-control" placeholder="Your Mobile *" value="" />
                              </div> 
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="password" id="password" name="password" class="form-control" placeholder="Password *" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" onchange="validate()" value="" required />
                                  <span id="message1"></span>
                              </div>
                              <script type="text/javascript">
                                  function validate(){
                                      var res = "FALSE";
                                      var str = document.getElementById("password").value; 
                                          if (str.match(/[a-z]/g) && str.match( 
                                                  /[A-Z]/g) && str.match( 
                                                  /[0-9]/g) && str.match( 
                                                  /[^a-zA-Z\d]/g) && str.length >= 8) 
                                              // res = "TRUE";
                                              document.getElementById("message1").innerHTML = "<span style='color:green;'>Password is Unique</span>";
                                          else 
                                          document.getElementById("message1").innerHTML = "<span style='color:red;'>Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</span>"; 
                                  }
                              </script>
                              <div class="form-group">
                                  <input type="password" id="confirm_password" name="cnfrmpswrd" class="form-control"  placeholder="Confirm Password *" onchange="check()" value="" required />
                                  <span id='message'></span>
                              </div>
                              <script type="text/javascript">
                                  function check() {
                                      if(document.getElementById('password').value ===document.getElementById('confirm_password').value) {
                                          document.getElementById('message').innerHTML = "<span style='color:green;' >Password match</span>";

                                      } else {
                                          document.getElementById('message').innerHTML = "<span style='color:red;' >Password not match</span>";
                                      }
                                  }
                              </script>
                              <input type="submit" class="btn btn-sm font-weight-bold px-3" style="background-color: #80ffaa" name="submit" value="Register"/>
                          </div>
                      </div>
                      </form>
                      
                  </div>
              </div>
          </div>
        </div>
      <!-- </div> -->
    </div>
  </div><br><br><br>
  <div class="footer" style="background-color: #001a00;height: 100px;">
     <h1 class="text-light font-weight-bold px-3">This is Footer</h1>
  </div>
</body>
</html> 