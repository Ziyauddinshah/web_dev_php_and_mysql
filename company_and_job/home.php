<?php 
session_start();
include('connection.php');


// if(isset($_GET['q']))
// {
//    $show=$_GET['q'];
   // $query="SELECT * FROM organisation where vacanciestype LIKE '%$show%'";
         
   $query="SELECT * FROM organisation";
   $qrun=mysqli_query($con,$query);
   // $row=mysqli_num_rows($qrun);
   // $qrun1=mysqli_fetch_array($qrun);
   // if($qrun1)
   // {
   //  $check=$qrun1['vacanciestype'];
   //  echo "<script>alert('$check');</script>";
   // }
   // else
   // echo "<script>alert('not');</script>";
// }
// if(isset($_GET['q1']))
// {
//    $show=$_GET['q1'];
//     // $query="SELECT * FROM searcher where jobtype='$show' or searchername='$show' or searcheraddress='$show'";
         
//    $query="SELECT * FROM searcher WHERE jobtype LIKE '%$show%' ";
//    $qrun1=mysqli_query($con,$query);
//    // $row=mysqli_num_rows($qrun);
//    // $qrun1=mysqli_fetch_array($qrun);
//    // if($qrun1)
//    // {
//    //  $check=$qrun1['vacanciestype'];
//    //  echo "<script>alert('$check');</script>";
//    // }
//    // else
//    // echo "<script>alert('not');</script>";
// }

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
  	<title>Home</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="./CSS/cart.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&language=en"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
    <style>
        /*.check{
          border: 10px solid green;
        }*/
        .mySlides {display:none;}
        .top{
           /*background-color:#1995CC;*/
           /*position:relative;*/
           /*display:block;
           float: right;
           width:100%;
           height:30px;*/
        }
        .searchbtn{
            font-size:25px;
            position:absolute;
            /*display:inline-block;*/
            width:50px;
            height:40px;
            padding-top:0px;
            right:20px;
            text-align:center;
            color:black;
            text-decoration:none;
            /*background-color:#80ffaa;*/
            color:white;
            border-radius:0 0 2px 2px;
            -webkit-transition: background-color 250ms ease-out, ;
            -moz-transition: background-color 250ms ease-out;
            -o-transition: background-color 250ms ease-out;
            transition: background-color 250ms ease-out;
        }

        .searchbtn:hover{ 
            color: #80ffaa;
        }
        .organisationform{
            display:none;
            background:#001a00;
            border-radius: 30px;
            padding:5px 5px;
            text-align:center;
            position:relative;
            /*transition:background-color 500ms linear;*/
        }
        .searcherform{
            display:none;
            background:#001a00;
            border-radius: 30px;
            padding:5px 5px;
            text-align:center;
            position:relative;
            /*transition:background-color 500ms linear;*/
        }
        .searchfield{
            border:none;
            padding:6px 8px;
            background:#001a00;
            outline:none;
            border-radius: 20px;
            border:1px solid white;
            width:80%;
            font-size:15px;
        }
        
        input::-webkit-input-placeholder {
            /*color: rgba(255,255,255,0.6);*/
            color: #80ffaa;
            padding-left: 50px;
        }
        input[type=search] {
            color:#80ffaa;
        }
        .submitbtn{
            background:none;
            padding-top: 6px;
            border:none;
            font-size:30px;
            color:white;
        }
        .submitbtn:hover{ 
            color: #80ffaa;
        }
    </style>
</head>
<body style="background-color: #80ffaa">
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #001a00"><!--style="padding-bottom: -4px;padding-top: -5px"-->
        <a id="logo" class="navbar-brand" href="home.php" ><text style="color:#80ffaa;"><b style="font-size: 20px;">C</b>ompany</text></a>
        <!-- <a id="logo" class="navbar-brand" href="home.php" style="margin-bottom: -6px;margin-top: -7px"><img src="./Image/logo.jpg" width="60px" height="40px"></a> -->
        <button type="button" id="nav1" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="nav">
          <ul class="navbar-nav" >
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold px-3" href="home.php">Home</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link text-light font-weight-bold px-3" href="cntrlpnl.php">Join With Us</a>
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
              function cars(){
                // window.location.assign("cars.php");
                $(".container").show();
              }
              function bikes(){
                // window.location.assign("#");
                $(".container").show();
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
                      <?php if(isset($_SESSION['UNAME'])) echo "<a href='cntrlpnl.php?logout=true' class='nav-link btn btn-info btn-sm font-weight-bold px-3' style='background-color: #80ffaa '>Logout</a>"; ?>
              </li>
          </ul>
        </div>
    </nav><br><br>
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
	  <br>
    <div class="container">
      <div class="card-deck justify-content-center">  
        <div class="col-sm-10 ">
          <img class="mySlides" src="library.jpg" style="width:100%;height: 480px;">
          <img class="mySlides" src="new.jpg" style="width:100%;height: 480px;">
          <img class="mySlides" src="new1.jpg" style="width:100%;height: 480px;">
          <img class="mySlides" src="water.jpg" style="width:100%;height: 480px;">
        </div>
      </div>
    </div><br><br>

    <div class="container">
      <div class="card-deck ">
        <div class="col-sm-3 text-align" style="height: 0px;">
          <div class="dropdown" data-toggle="dropdown" data-hover="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #001a00">
              Search For
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item abc" href="#" >Organisation <i style="color: #001a00" class="fa fa-search" ></i></a>
              <a class="dropdown-item abc1" href="#">Worker <i style="color: #001a00" class="fa fa-search" ></i></a>
            </div>
          </div>
          <script type="text/javascript">
                $('div div').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
              }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
              });
          </script>
        </div>
        <script>
           $( document ).ready(function() {
               $(".abc").click(function(){
                $(".organisationform").show("500");
                $(".searcherform").hide("200");
                // localStorage.setItem("name", "organisation");
               });
           });
           $( document ).ready(function() {
               $(".abc1").click(function(){
                $(".searcherform").show("500");
                $(".organisationform").hide("200");
                // localStorage.setItem("name", "searcher");
               });
           });
        </script>
      </div>
    </div><br><br>
    
    <div class="container">
      <div class="card-deck justify-content-center"> 
        <div class="col-sm-8 ">
          <form class="organisationform" >
               <input class="searchfield" autocomplete="off" name="q" type="search" 
                  placeholder="Search for Organisation" />
               <button class="submitbtn fa fa-search organisation" type="submit" ></button>
          </form>
          <form class="searcherform" >
               <input class="searchfield" autocomplete="off" name="q1" type="search" 
                  placeholder="Search for Worker" />
               <button class="submitbtn fa fa-search searcher" type="submit" ></button>
          </form>
        </div>
        <script>
           $( document ).ready(function() {
               $(".organisation").click(function(){
                localStorage.setItem("name", "organisation");
               });
           });
           $( document ).ready(function() {
               $(".searcher").click(function(){
                localStorage.setItem("name", "searcher");
               });
           });
        </script>
      </div>
      <br>
    </div>

    <div class="container">
      <div class="card-deck justify-content-center">
        <div class="col-sm-3 card " style="background-color: #001a00;height:500px;">
          <h2 class="text-light">Location and stuff</h2><br>
          <div>
            <label class="text-light"><h4>Search by Location</h4></label>
            <input type="text" id="location" name="location" style="width: 100%;border-radius: 3px;border:1px solid #001a00;margin-bottom: 5px">
            <input class="btn btn-sm searchlocation" type="submit" name="submit" value="Submit" style="background-color: #80ffaa;border:1px solid #80ffaa;">
            <hr>
          </div>
          <script type="text/javascript">
            $(document).ready(function(){
               var search_for = "";
               $(".searchlocation").click(function(){
                  var str = $("#location").val();
                  var search_for = localStorage.getItem("name");
                  $.ajax({
                    url:"filter_sort.php",
                    type:"post",
                    data:{action:search_for,location_text:str},
                    success:function(data){
                      if(data=="Not found")
                        $("#organisation").html(data+"...").css({"padding-top":"10px","font-size":"30px","color":"red"});
                      else
                        $("#organisation").html(data);
                    }
                  });
              });
                 
               // $('.searchḷocation').click(function(){
               //  // var search = $(this).val();
               //  // var str = $("#location").val();
               //  // if(str != '')
               //  // {
               //  //   alert("yes");
               //  //  // search_data(str);
               //  // }
               //  // else
               //  // {
               //    alert("no");
               //   // search_data();
               //  // }
               // });
               // search_data();
               //   function search_data(str)
               //   {
               //    var search_for = localStorage.getItem("name");
               //    $.ajax({
               //      url:"filter_sort.php",
               //      type:"post",
               //      data:{action:search_for,location_text:str},
               //      success:function(data){
               //        if(data=="Not found")
               //          $("#organisation").html(data+"...").css({"padding-top":"10px","font-size":"30px","color":"red"});
               //        else
               //          $("#organisation").html(data);
               //      }
               //    });
               //  }
            });
          </script>
          <div class="text-light">
            <h4 >Sort By</h4>
            <ul>
              <li >
                <label>Company Name</label>
                <input type="checkbox" name="companyname">
              </li>
              <li>
                <label>Job Type</label>
                <input type="checkbox" name="jobtype">
              </li>
              <li>
                <label>No of Vacancies</label>
                <input type="checkbox" name="noofvacancies">
              </li>
            </ul>
            <input class="btn btn-sm" style="background-color: #80ffaa" type="submit" name="sortby" value="Apply">
          </div>
        </div>
        <!-- <script type="text/javascript">
          $(document).ready(function(){
            $(document).on("click",".abc",function(){
              var addcartid = $(this).data("id");
              $.ajax({
                url:"addcart.php",
                type:"post",
                data:{pid:addcartid},
                success:function(data){
                  // if(!isNaN(data))
                  if(data>=0)
                  {
                    var z2=data;
                    $("#cart"+addcartid).html("Added to Cart").css("background-color","green");
                    $("#navcartitem").html(" "+z2+" Item");
                  }
                }
              });
            });
          });
        </script> -->
        <div class="col-sm-6 card bg-light " id="organisation" style="height: auto;">
          <?php 
             // if(isset($_GET['q']))
             // {
                  echo "<h3>Organisations</h3>";
                  while($row=mysqli_fetch_array($qrun))
                  {
                    ?>
                    <div class="col-sm-12 organisation">
                      <h2><?php echo $row['companyname'];?></h2> 
                      <span>Ratings:</span>
                      <div>
                        <span>Total Vacancies: <?php echo $row['noofvacancies']; ?></span>
                        <span>||</span>
                        <span>Totlal Employee: <?php echo $row['noofemployee']; ?></span>
                      </div>
                      <div><h4 ><b>Vacancies Type: </b><span style="color:red;"><?php echo $row['vacanciestype']; ?></span></h4></div>
                      <hr style="border-top: 1px solid #001a00;">
                      <div>
                        <p>this is description section of company</p>
                        <div>
                          <span>Email: <?php echo $row['companyemail']; ?></span><br>
                          <span>Mobile: <?php echo $row['companymob']; ?></span><br>
                          <span>Address: <?php echo $row['companyaddress']; ?></span>
                        </div>
                        <a type="submit" class="btn btn-sm" href="#" style="background-color: #80ffaa">Know More <span style="color:blue">>></span></a>
                      </div>
                      <hr style="border-top: 1.5px solid #001a00;">
                    </div>
                    
                    <?php
                  }
              ?>
              <!--   }
                if(isset($_GET['q1']))
                {
                     echo "<h3>Searcher</h3>";
                     while($row1=mysqli_fetch_array($qrun1))
                     {
                       // $row2=$row['vacanciestype'];
                       >
                       <div class="col-sm-12 ">
                         <h2><?php echo $row1['searchername'];?></h2> 
              -->
              <!--       <label for="red">Future Add:</label>
                         <input type="checkbox" name="favcolor" id="red" value="red" checked> 
                         <-- <span type="checkbox">Future Add:</span> --
                         <div>
                           <span>Available Time: <?php echo $row1['availabletime']; ?></span>
                           <span>||</span>
                           <-- <span>Totlal Employee: <?php echo $row1['noofemployee']; ?></span> --
                         </div>
                         <div><h4 ><b>Job Type: </b><span style="color:red;"><?php echo $row1['jobtype']; ?></span></h4></div>
                         <hr style="border-top: 1px solid #001a00;">
                         <div>
                           <p>this is description section of company</p>
                           <div>
                             <span>Email: <?php echo $row1['searcheremail']; ?></span><br>
                             <span>Mobile: <?php echo $row1['searchermob']; ?></span><br>
                             <span>Address: <?php echo $row1['searcheraddress']; ?></span>
                           </div>
                           <a type="submit" class="btn btn-sm" href="#" style="background-color: #80ffaa">Know More <span style="color:blue">>></span></a>
                         </div>
                         <hr style="border-top: 1.5px solid #001a00;">
                       </div> 
              -->
                    
                 <!--  //   <php
                  // }
             // } 
          ?>-->
        </div>
        <div class="col-sm-3 card " style="background-color: #001a00;height:100px;"><h2 class="text-light">Add</h2></div>
      </div>
    </div><br>

    <div class="container">
      <div class="card-deck justify-content-center">
        <div class="col-sm-6 ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Join as an Organisation</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary" style="background-color:  #001a00">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Join as a Searcher</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary" style="background-color:  #001a00">Go somewhere</a>
            </div>
          </div>
        </div>
      </div><br><br>
    </div>
    <!-- Script for automatic slideshow -->
    <script>
      var myIndex = 0;
      carousel();
      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); // Change image every 2 seconds
      }      
    </script>
    <div class="footer" style="background-color: #001a00;height: 100px;">
      <h1 class="text-light font-weight-bold px-3">This is Footer</h1>
      <script>
          if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
          }  
      </script>
    </div>
</body>
</html>