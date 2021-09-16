<?php
session_start();

$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
}
//print_r($b_id);
//echo "</br>";

//for($i=1;$i<=$size;$i++)
  //echo "$b_id[$i] </br>";
$sname="localhost";
$uname="root";
$password="";
$dbname="brm_db";

$con=mysqli_connect($sname,$uname,$password,$dbname,"3308");
mysqli_select_db($con,'brm_db');

if(isset($_SESSION['UNAME']))
{
	for($k=1;$k<=$size;$k++)
	{
		$q="DELETE from record where bid=".$b_id[$k];
		
		$d=mysqli_query($con,$q);
		//if($d)
			//echo "successful";
		//else
			//echo "failed";
		//echo $b_id[$k];
		//echo "<br>";
	}
}
else
{
      echo "<script> aler('Only Authorised can delete...') </script>";
      echo "<script> location.href='deleteForm.php' </script>";
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
 <head>
 <title> Deletion </title>
 </head>
 <body>
 <h1> Book Record Management </h1>
 <div><?php
		echo $size."Records Deleted";
	  ?>
	  <h5>Delete more : <a href="deleteForm.php"> Click here </a></h5>
	  <h5> <a href="viewForm.php"> View Form </a></h5>
	  <h4> HOME: <a href="home.php"> Go home </a></h4>
	 </div>
	 
</body>
</html>