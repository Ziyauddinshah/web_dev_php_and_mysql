<?php 
	session_start();

	include 'connection.php';

	if(isset($_POST['submit_as_organisation']))
	{
		if(isset($_SESSION['UNAME']))
		{
			$username=$_SESSION['UNAME'];
			$companyname=$_POST['companyname'];
			$companyemail=$_POST['companyemail'];
			$companymob=$_POST['companymob'];
			$companyaddress=$_POST['companyaddress'];
			$noofvacancies=$_POST['noofvacancies'];
			$noofemployee=$_POST['noofemployee'];
			$vacanciestype=$_POST['select'];
			// echo $companyname;
			$q="INSERT into organisation(username,companyname,companyemail,companymob,companyaddress,noofvacancies,noofemployee,vacanciestype)
			values('$username','$companyname','$companyemail','$companymob','$companyaddress',$noofvacancies,$noofemployee,'$vacanciestype')";
			$qrun=mysqli_query($con,$q);
			if($qrun)
			{
				echo "<script > alert('Successfull..') </script>";
				echo "<script > location.href='cntrlpnl.php' </script>";
			}
			else
			{
				echo "<script > alert('Something is wrong..') </script>";
				echo "<script > location.href='cntrlpnl.php' </script>";
			}

		}
		else
		{
			echo "<script > alert('Login first..') </script>";
			echo "<script > location.href='cntrlpnl.php' </script>";
		}
	}
	else if(isset($_POST['submit_as_searcher']))
	{
		if(isset($_SESSION['UNAME']))
		{
			$username=$_SESSION['UNAME'];
			$searchername=$_POST['searchername'];
			$searchermob=$_POST['searchermob'];
			echo $searchername,$searchermob;
			$q="INSERT into searcher(username,searchername,searchermob) values('$username','$searchername','$searchermob')";
			$qrun=mysqli_query($con,$q);
			if($qrun)
			{
				echo "<script > alert('Successfull..') </script>";
				echo "<script > location.href='cntrlpnl.php' </script>";
			}
			else
			{
				echo "<script > alert('Something is wrong..') </script>";
				echo "<script > location.href='cntrlpnl.php' </script>";
			}

		}
		else
		{
			echo "<script > alert('Login first..') </script>";
			echo "<script > location.href='cntrlpnl.php' </script>";
		}
	}

	mysqli_close($con);
?> 
<!-- <php
if(isset($_GET['q']))

{
	$p=$_GET['q'];
    echo $p;
	echo "<script> alert('$p'); </script>";
	// echo $_GET['q'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>check</title>
</head>
<body>
<div>
	<form>
		<input type="search" name="q">
		<button type="submit" name="submit">Submit</button>
	</form>
</div>
</body>
</html> -->