

<!DOCTYPE html>
<html>
<head>
	<title>sendotp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="./CSS/cart.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
	<div>
		<h3>OTP Page</h3>
	</div><br>
<h4>Login :<a href="login.php">click here</a></h4>

	<div class="container ">
		<div class="card-deck justify-content-center">
			<div class="col-sm-5">
				<?php
					session_start();

					if(isset($_POST['sendotp']))
					{
						$name=$_POST['name'];
						$mobile=$_POST['mobileno'];
						// Authorisation details
						$username = "ziyashah.btech@gmail.com";
						$hash = "afaadea106e3aedafe9965a8ee10a2c3221fe12946b743b7e5fc2c7ba1e5d162";

						// Config variables. Consult http://api.textlocal.in/docs for more info.
						$test = "0";

						// Data for text message. This is the text message data.
						$sender = "TXTLCL"; // This is who the message appears to be from.
						$numbers = $mobile; // A single number or a comma-seperated list of numbers
						$otp=mt_rand(10000,99999);
						$message = "Hello ".$name."This is your OTP: ".$otp;
						// 612 chars or less
						// A single number or a comma-seperated list of numbers
						$message = urlencode($message);
						$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
						$ch = curl_init('http://api.textlocal.in/send/?');
						$s=curl_setopt($ch, CURLOPT_POST, true);
						$s=curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						$s=curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						$result= curl_exec($ch); // This is the result from the API

						// if (curl_errno($ch)) {
						//   // $info = curl_getinfo($ch);
						// 	$info=curl_getinfo($ch, CURLINFO_HTTP_CODE);
						//   echo 'Took ', $info['total_time'], ' seconds to send a request to ', $info['status'], "\n";
						//   echo "Failed";
						// }
						// else
						// 	echo "Successfully sent OTP..";
						
							
						curl_close($ch);
						// echo $result;
					}
				?>
			</div>
		</div>
		
		<div class="card-deck justify-content-center">	
			<div class="col-sm-5 card ">
				<form action="sendotp.php" method="post">
					<div class="card-body">
						<div class="form-body">
							<label for="fname"><i class="fa fa-user"></i> Name:</label>
				            <input type="text" id="name" name="name" aria-pressed="false" autocomplete="off" placeholder="John M. Doe" ><br><br>
				            <label for="mobile"><i class="fa fa-mobile"></i> Mobile No:</label>
				            <input type="text" id="mobileno" name="mobileno" aria-pressed="false" autocomplete="off" placeholder="1234567890"><br><br>
				            <button type="submit" style="width: 100%" name="sendotp" value="Continue to checkout" class="btn btn-primary">Send OTP</button>
						</div><br><br>
						<div class="form-footer">
							<label for="mobile"><i class="fa fa-number"></i> Enter OTP:</label>
				            <input type="text" id="verifyotp" name="otp" aria-pressed="false" autocomplete="off" placeholder="1234567890"><br><br>
				            <button type="submit" style="width: 100%" name="verifyotp" value="Continue to checkout" class="btn btn-primary">Verify OTP</button>
						</div>
					</div>		
				</form>
			</div>	
		</div>	
	</div>
</body>
</html>