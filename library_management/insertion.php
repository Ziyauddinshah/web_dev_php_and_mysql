<?php
session_start();

$studentname=$_POST['studentname'];
$studentrollno=$_POST['studentrollno'];
$studentclass=$_POST['studentclass'];

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

if(isset($_SESSION['UNAME']))
{
	$q="INSERT INTO Record(studentname, studentrollno, studentclass) values('$studentname', $studentrollno, $studentclass)";
 	$status=mysqli_query($con, $q);
}
else
{
	  $status=0;
	  echo '<script type="text/javascript">';
      echo ' aler("Only Authorised can insert...")'; 
      echo '</script>';   
      // echo "<script> location.href='insertForm.php' </script>";
}
//if ($status) {
 //  echo "New record inserted successfully";
//} else {
//   echo "Error: " . $q . "<br>" . mysqli_error($con);
//} 
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
 <head>
 <title> Insertion </title>
 </head>
 <body>
 <h1> Book Record Management </h1>
 <div><?php
	if($status)
	{
		echo "Record Inserted Successfully";
		
	}
	   else
		   echo "Insertion failed";
	  ?>
	  <h5>Insert more : <a href="insertForm.php"> Click here </a></h5>
	  <h5> <a href="viewForm.php"> View Form </a></h5>
	  <h4> HOME: <a href="home.php"> Go home </a></h4>
	 </div>
 </body>
</html>
