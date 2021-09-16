<?php
include('connection.php');
function getuserip()
{
	switch(true){
		case(!empty($_SERVER['HTTP_X_REAL_IP'])): return $_SERVER['HTTP_X_REAL_IP'];
		case(!empty($_SERVER['HTTP_CLIENT_IP'])): return $_SERVER['HTTP_CLIENT_IP'];
		case(!empty($_SERVER['HTTP_X_FORWORDED_FOR'])): return $_SERVER['HTTP_X_FORWORDED_FOR'];
		default: return $_SERVER['REMOVE_ADDR'];
	}
}

function add to cart(){
	global $con;
	if(isset($_GET['add_cart']))
	{
		$ip_add=getuserip();
		$p_id=$_GET['add to cart'];
		$pqnty=$_POST['pqnty'];
		$check_product="select * from pcart where uipadd='$ip_add' and pid='$p_id'";
		$q=mysqli_query($check_product);
		if(mysqli_num_rows($q)>0){

			echo "<script> alert('already added')</script>";
			echo "<script>wnidow.open('product.php?pid=$p_id','_self')</script>";
	     }
	     else{
	     	$m="insert into pcart(pid,uipadd,pqnty) values('$p_id','$ip_add','$pqnty')";
	     	$q=mysqli_query($con,$m);
	     	echo "<script>window.open('product.php?pid=$p_id','_self')</script>"
	     }
	}
}

?>