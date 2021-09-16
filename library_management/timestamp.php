<!DOCTYPE html>
<html>
<head>
	<title>timer</title>
	<style type="text/css">
		#demo1{
			height: 50px;
			
		}
	</style>
</head>
<body>

<button onclick="showtimer()">Click me</button>

<p id="demo2">hii</p>
<input type="text" id="demo" name="put" placeholder="00:00:00"><br><br>
<div id="demo1"></div>
<!-- <div id="check"></div> -->
<script>
function showtimer() {
  var time=document.getElementById("demo").value;
  // var time="00: 00: 02";
  demo1=document.getElementById("demo1");
  applycss(demo1);
  // demo1.innerHTML = time;
  document.getElementById("demo1").innerHTML = time;

  my_timer=setInterval(function(){
  	// var day=0;
  	var hr=0;var min=0; var sec=0;
  	var time_up=false;
  	t=time.split(":");
  	hr=parseInt(t[0]);
  	min=parseInt(t[1]);
  	sec=parseInt(t[2]);

  	if(sec==0)
  	{
  		if(min>0)
  		{
  			sec=59;
  			min--;
  		}
  		else if(hr>0)
  		{
  			min=59;
  			sec=59;
  			hr--;
  		}
  		// else if(day>0)
  		// {
  		// 	hr=59;
  		// 	min=59;
  		// 	sec=59;
  		// 	day--;
  		// }
  		else
	  	{
	  		time_up=true;
	  	}
  	}
  	else
  	{
  		sec--;
  	}

  	if(min<10) min="0"+min;
  	if(hr<10) hr="0"+hr;
  	if(sec<10) sec="0"+sec;
  	// if(day<10) day="0"+day;
  	time=hr+":"+min+":"+sec;
  	if(time_up)
	{
		time="Time_up";
		// window.alert("hii");
		// prompt("hii")


	}
  	document.getElementById("demo1").innerHTML=time;
  	// document.getElementById("check").innerHTML="hello!";
  	
  	if(time_up)
  	{
  		
  		clearInterval(my_timer);
  		showalert(time);	
  	}
  			
  },1000);
  
}
function showalert(time)
{
   var x=
   "<?php
    $to      = 'ziyazindagi1999@gmail.com,ziyashah.btech@gmail.com';
    $subject  = 'Testing sendmail.exe';
    $message  = 'Hi Ziya, you just received an email using sendmail! This is used for testing purpose.';
    $headers  = 'From: ziyauddin270499@gmail.com' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8';
    if(mail($to, $subject, $message, $headers))
        echo "Email sent..";
    else
        echo "Email sending failed..";
   ?>";
   self.location.reload();
   alert(x);
}
function applycss(demo1) {
	demo1.style.fontSize="30px";
	demo1.style.width="150px";
	demo1.style.padding="20px";
	
	demo1.style.textAlign="center";
	demo1.style.color="teal";
	demo1.style.border="2px solid green";
	demo1.style.fontWeight="bold";
	demo1.style.borderRadius="3%";
}

</script>
</body>
</html>