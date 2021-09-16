<?php
session_start();


$sname="localhost";
$uname="root";
$password="";
$dbname="brm_db";


$con=mysqli_connect($sname,$uname,$password,$dbname,"3308");
//if (!$con) {
  // die("Connection failed: " . mysqli_connect_error());
  //}
   //echo "connected successfully" ,'</br></br>';

mysqli_select_db($con,'brm_db');
//$q="INSERT INTO book(title,price,author) values('$title',$price,'$author')";
//$q = "INSERT INTO Record(btitle, bprice, bauthor)
 //VALUES ('$title', $price, '$author')";
 
 //$status=mysqli_query($con,$q);
//mysqli_close($con);


//$conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
  //if (!$con) {
 //   die("Connection failed: " . mysqli_connect_error());
//  }
//   echo "connected successfully" ,'</br>';
//$q = "INSERT INTO Record (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";

$status=0;
if(isset($_POST['submit']) )
{
  if(isset($_SESSION['UNAME']))
  {
    $bookname=$_POST['bookname'];
    $authorname=$_POST['authorname'];
    $price=$_POST['price'];
    $q="INSERT INTO bookrecord(bookname, authorname, price) values('$bookname', '$authorname', $price)";
    $status=mysqli_query($con, $q);
  }
  else
  {
     echo '<script>alert("You are not Authorised ..")</script>';
  }
}
// else
// {
//     $status=0;
//     // echo '<script>alert("You are not Authorised ..")</script>';
      
//       // echo "<script> location.href='insertForm.php' </script>";
// }
//if ($status) {
 //  echo "New record inserted successfully";
//} else {
//   echo "Error: " . $q . "<br>" . mysqli_error($con);
//} 
mysqli_close($con);
?>