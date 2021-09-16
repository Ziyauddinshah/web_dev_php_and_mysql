<?php
session_start();

$con=mysqli_connect('localhost','root','','brm_db',"3308");
mysqli_select_db($con,'brm_db');

if(isset($_SESSION['UNAME']))
{
  // echo "string";
  if(isset($_POST['submit']))
  {
    $titlename=$_POST['titlename'];
    $authorname=$_POST['authorname'];
    $givendate=$_POST['givendate'];
    $submitdate=$_POST['submitdate'];
    $idcardno=$_POST['idcardno'];
    $studentname=$_POST['studentname'];
    $studentrollno=$_POST['studentrollno'];
    $course=$_POST['course'];
    $branchandyear=$_POST['branchandyear'];
    $email=$_POST['email'];
    // echo "<script > alert('$course'); </script>";
    // echo $titlename.$authorname.$givendate.$submitdate.$idcardno.$studentrollno.$studentname.$course.$branchandyear;
    $q="INSERT into givebook(studentrollno,studentname,idcardno,course,branchandyear,email,titlename,authorname,givendate,submitdate) 
    values($studentrollno,'$studentname',$idcardno,'$course','$branchandyear','$email','$titlename','$authorname','$givendate','$submitdate')";
    $q1=mysqli_query($con,$q);
    if($q1)
    {
        // $remind_query = "SELECT studentname, email From givebook WHERE givendate = '$currentDate'">
        // $run = mysqli_query($dbcon, $remind_query);

        // while($row=mysqli_fetch_array($run))
        // {
        //         $parID=$row[0];
        //         $parForename=$row[1];
        //         $parSurname=$row[2];
        //         $parChild=$row[3];
        //         $parEmail=$row[4];
        //         $parCode=$row[5];
        //         $parExpiry=$row[6];
        //         $parReminder=$row[7];
        //         $parGrace=$row[8];
                
        //   $to = $parEmail;
        //     $subject = "Code 30 Reminder";
        //     $txt = "Hi ".$parForename."\nJust a reminder that your code 30 will expiry on the".$parExpiry.",\n"
        //               ."Please renew your code\n"."\nThank You"."\nBridges Nursery";
          
        //     $headers = "From: Bridges@email.com";
            

        // mail($to,$subject,$txt,$headers);
        // }`

       // $to       = $email;
       // $subject  = 'Testing sendmail.exe';
       // $message  = 'Hi <b>'.$studentname.','.$studentrollno.','.$course.','.$branchandyear.'</b> you just request and receive a book name: <b>'.$titlename.'</b> author name: <b>'.$authorname.'</b> from library.<br>You have to return this before given time otherwise you will be under punishment section.';
       // $headers  = 'From: ziyauddin270499@gmail.com' . "\r\n" .
       //             'MIME-Version: 1.0' . "\r\n" .
       //             'Content-type: text/html; charset=utf-8';
       // if(mail($to, $subject, $message, $headers))
       //    {
       //      echo "<script > alert('given sussefully..'); </script>";
       //    }
       //  else
       //     echo "Email not sent";
      
      // <script> 
      //           // var time='00: 00: 59';
      //           //  my_timer=setInterval(function(){
      //           //     var hr=0;var min=0; var sec=0;
      //           //     var time_up=false;
      //           //     t=time.split(':');
      //           //     hr=parseInt(t[0]);
      //           //     min=parseInt(t[1]);
      //           //     sec=parseInt(t[2]);

      //           //     if(sec==0)
      //           //     {
      //           //       if(min>0)
      //           //       {
      //           //         sec=59;
      //           //         min--;
      //           //       }
      //           //       else if(hr>0)
      //           //       {
      //           //         min=59;
      //           //         sec=59;
      //           //         hr--;
      //           //       }
      //           //       else
      //           //       {
      //           //         time_up=true;
      //           //       }
      //           //     }
      //           //     else
      //           //     {
      //           //       sec--;
      //           //     }
      //           //     if(min<10) min='0'+min;
      //           //     if(hr<10) hr='0'+hr;
      //           //     if(sec<10) sec='0'+sec;
      //           //     time=hr+':'+min+':'+sec;
      //           //     if(time_up)
      //           //     {
      //           //       time='Time_up';
      //           //     }
      //           //     document.getElementById('demo1').innerHTML=time;
      //           //     // setTimeout(function(){ showalert(); }, time);
      //           //     if(time_up)
      //           //     {
      //           //       clearInterval(my_timer);
      //           //       // showalert(time);  
      //           //     }
      //           //     // if(time=='Time_up')
      //           //     //   showalert();
                        
      //           //   },1000);
      ?>
            <script>     
                // var y = 2000;
                function myFunction() {
                  setTimeout(function(){ showalert(); }, 2000);
                }
                function showalert()
                {
                   // var x=
                   //  $to      = $email;
                   //  $subject  = 'Testing sendmail.exe';
                   //  $message  = 'Hi '.$studentname.','.$studentrollno.','.$course.','.$branchandyear.' you did not return book name: '.$titlename.' author name: '.$authorname.' on time so you are under punishment section. You have to submit 30 rupee as a fine.';
                   //  $headers  = 'From: ziyauddin270499@gmail.com' . '\r\n' .
                   //              'MIME-Version: 1.0' . '\r\n' .
                   //              'Content-type: text/html; charset=utf-8';
                   //  if(mail($to, $subject, $message, $headers))
                   //      echo 'Email sent..';
                   //  else
                   //      echo 'Email sending failed..';
                   
                   // self.location.reload();
                   alert('hii');
                }
                myFunction();
            </script>
      <?php
    }
    else
      echo "<script > alert('failed..'); </script>";
  }
}
else
{
  echo "<script>alert('You are not Authorize');</script>";
}
mysqli_close($con);

?>

<!DOCTYPE html>
<html>
 <head>
    <title> Data Manage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" type="text/css" href="./CSS/cart.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </head>
<body style="background-color: #03B9DF;">
  <div id="demo1"></div>
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

  <script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
      // alert('login');
      window.location.assign('login.php');
      // $("#myModal").modal();
    });
  });
  </script>
 <br>
  <div class="container bg-light">
    <h1 class="text-center">Book Record Management</h1><br>
    <form action="#" method="post" >
      <div class="card-deck justify-content-between">
          <div class="col-sm-6 " >
              <div class="card-header font-lg font-weight-bold text-center">
                <h4>Book Information</h4>
              </div>
              <div class="card-body">
                    <label for="titlename">Title Name :</label>
                    <input type="text" id="cname" name="titlename" aria-pressed="false" style="width: 100%;" ><br><br>
                    <label for="authorname"> <i class="fa fa-user"></i>Author Name :</label>
                    <input type="text" id="cname" name="authorname" aria-pressed="false" style="width: 100%;" ><br><br>
                  <div class="text-align">
                    <label for="givendate">Book Allocation Date :</label>
                    <input type="date" style="width: 100%;" id="givendate" name="givendate" aria-pressed="false" ><br><br>
                    <label for="submitdate">Submit Date :</label>
                    <input type="date" style="width: 100%;" id="submitdate" name="submitdate" aria-pressed="false" >
                  </div>
              </div>
          </div>
          <div class="col-sm-6 " >
              <div class="card-header font-lg font-weight-bold text-center">
                <h4>Student Information</h4>
              </div>
              <div class="card-body">
                    <label for="cname"> <i class="fa fa-credit-card"></i> ID Card No :</label>
                    <input type="integer" id="cname" name="idcardno" aria-pressed="false" style="width: 100%;" >
                    <h5 class="text-center">or</h5>
                  <div class="text-align">              
                    <label for="studentname"> <i class="fa fa-user"></i>Name :</label>
                    <input type="text" id="studentname" name="studentname" style="width: 100%;" ><br>
                    <label for="studentrollno">Roll No :</label>
                    <input type="integer" id="studentrollno" name="studentrollno"  style="width: 100%;" >
                  </div><br>
                  <div class="text-align">
                    <label for="course">Course :</label>
                    <input type="text" id="course" name="course"  style="width: 150px;margin-right: 30px;" >
                    <label for="branchandyear">Branch and Year:</label>
                    <input type="text" id="branchandyear" name="branchandyear"  style="width: 145px;"  >              
                  </div><br>
                  <label for="email"> <i class="fa fa-envelope"></i> Email :</label>
                  <input type="text" id="email" name="email" style="width: 100%;" ><br>
                </div>
              </div>
          </div>
          <input type="submit" class="btn btn-primary" style="margin-left: 48%;" name="submit" value="Submit"><br><br>
      </div><br>
    </form>
  </div>
  <h4> See Product <a href="product.php" >click here</a></h4>
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
    <script>
        if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
        }
      </script>
  </footer>
</body>
</html>