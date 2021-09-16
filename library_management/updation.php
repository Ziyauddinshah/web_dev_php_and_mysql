<?php

session_start();
$size= sizeof($_POST);
$record=$size/4;
$sname="localhost";
$uname="root";
$password="";
$dbname="brm_db";

$con=mysqli_connect($sname,$uname,$password,$dbname,"3308");
for($i=1;$i<=$record;$i++)
{
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];
	$index2="studentname".$i;
	$title[$i]=$_POST[$index2];
	$index3="studentrollno".$i;
	$price[$i]=$_POST[$index3];
	$index4="studentclass".$i;
	$author[$i]=$_POST[$index4];
	
}
mysqli_select_db($con,'brm_db');

if(isset($_SESSION['UNAME']))
{
	for($i=1;$i<=$record;$i++)
	{
		$q="UPDATE record SET studentname='$title[$i]',studentrollno='$price[$i]',studentclass='$author[$i]' where bid=$bookid[$i]";
		$t=mysqli_query($con,$q);
	}
}
else
{
	  echo '<script type="text/javascript">';
      echo ' aler("Only Authorised can update...")'; 
      echo '</script>';   
      echo "<script> location.href='updateForm.php' </script>";
}

mysqli_close($con);
?>


<!DOCTYPE html>
<html>
 <head>
 <title> Updation </title>
 </head>
 <body>
 <h1> Book Record Management </h1>
 <div><?php
		echo $record."Records Updated";
	  ?>
	  <h5>Update more : <a href="updateForm.php"> Click here </a></h5>
	  <h5> <a href="viewForm.php"> View Form </a></h5>
	  <h4> HOME: <a href="home.php"> Go home </a></h4>
	 </div>
	 
</body>
</html>