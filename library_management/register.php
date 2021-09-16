<?php
session_start();
$con=mysqli_connect('localhost','root','','brm_db',"3308");
$m=mysqli_select_db($con,'brm_db');
$r=0;
if(isset($_POST['submit']))
{
     $name=$_POST['name'];
     $lastname=$_POST['lastname'];
     $uemail=$_POST['uemail'];
     $umob=$_POST['umob'];
     $udob=$_POST['udob'];
     $upassword=$_POST['upassword'];
     $ucnfrmpswrd=$_POST['ucnfrmpswrd'];
     $gender=$_POST['gender'];
     $answer=$_POST['answer'];
     //set session
     $_SESSION['UNAME']=$name;
     $_SESSION['UPASS']=$upassword;

     // echo $username;
     if ($upassword==$ucnfrmpswrd) 
     {

          // echo $name;echo $lastname;echo $uemail;echo $umob;echo $udob;echo $upassword;
          $p="SELECT *from uregistration where name='$name'";
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
               $q="INSERT INTO uregistration(name,lastname,uemail,umob,udob,gender,answer,upassword) 
               values('$name','$lastname','$uemail','$umob','$udob','$gender','$answer','$upassword')";
               $q1=mysqli_query($con,$q);
               if($q1)
               {
                 $to       = $uemail;
                 $subject  = 'Testing sendmail.exe';
                 $message  = 'Hi <b>'.$name.'</b> you just register in library management!<br>Verify its you by clicking here: <a style="color:blue;" type="button" href="home.php"><b>Verify</b></a>';
                 $headers  = 'From: ziyauddin270499@gmail.com' . "\r\n" .
                             'MIME-Version: 1.0' . "\r\n" .
                             'Content-type: text/html; charset=utf-8';
                 if(mail($to, $subject, $message, $headers))
                    {
                      $r=1;
                      echo "<script > alert('register sussefully..') </script>";
                    }
                     // echo "Email sent";
                 else
                    echo "<script > alert('email sending failed') </script>";
               }
          }
     }
     else{
          // echo "Oops1.</br>";
          // echo "Your password does not match confirm password again";
          echo '<script> alert("password does not match"); </script>';
     }

}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>register1</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .nav-item{
        padding-right: 15px;  
      }
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    /*background: #f8f9fa;*/
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    /*background: #f8f9fa;*/
    border-top-left-radius: 10% 0%; 
    border-bottom-left-radius: 10% 0%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
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
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
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
}
.register .nav-tabs .nav-link.active{
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
          <li class="nav-item">
            <a class="nav-link text-light font-weight-bold px-3" href="givebook.php">GIVE BOOK</a>
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

<div class="container register card">
    <div class="row ">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" onclick="goto()" value="Login"/><br/>
            <script type="text/javascript">
                 function goto(){
                    window.location.assign("login.php");
                 }
            </script>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <span>
                      <?php 
                        if($r)
                          echo "<h6 style='color:green;'>Registered successfully..</h6>";
                      ?>
                    </span>
                    <h3 class="register-heading" style="color: orange;">Register and be Friend</h3>
                    <form action="register.php" method="post">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="First Name *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" aria-pressed="false" autocomplete="off" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="udob" placeholder="Date Of Birth *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="answer" aria-pressed="false" autocomplete="off" placeholder="Enter Your Answer *" value="" />
                                </div>   
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" aria-pressed="false" name="uemail" autocomplete="off" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="umob" aria-pressed="false" autocomplete="off" class="form-control" placeholder="Your Mobile *" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="upassword" class="form-control" placeholder="Password *" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="off" onchange="validate()" value="" required />
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
                                    <input type="password" id="confirm_password" name="ucnfrmpswrd" class="form-control"  placeholder="Confirm Password *" onchange="check()" value="" required />
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
                                <input type="submit" class="btnRegister" name="submit" value="Register"/>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
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