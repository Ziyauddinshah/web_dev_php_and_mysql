<?php
// $con=mysqli_connect('localhost','root');
// mysqli_select_db($con,'db');
include('connection.php');
$q="select *from cars";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
 <head>
 <title> View Cars </title>
 <link rel="stylesheet" type="text/css" href="./CSS/view.css" />
 </head>
 <body>
 <h1 style="color:black;text-align:center;"> Cars Management </h1>
 <table id="view">
 <tr>
  <th> Id </th>
  <th> Product Name </th>
  <th> Price </th>
  <th> Image </th>
  <th> Stock </th>
 </tr>
  <?php
  for($i=1;$i<=$num;$i++)
  {
	 $row=mysqli_fetch_array($result);
    ?>
	<tr>
	 <td> <?php echo $row['id']; ?></td>
	 <td> <?php echo $row['product_name']; ?></td>
	 <td> <?php echo $row['price']; ?></td>
	 <td> <?php echo $row['image']; ?></td>
	 <td> <?php echo $row['stock']; ?></td>
	</tr>
   <?php
  }
 ?>
 </table> 
 <br>
  <?php
 if(!$num)
	 echo "Database is Empty";
?>
<h4> HOME: <a href="abc.php"> Go home </a></h4>
 </body>
</html>