<?php
require_once("Rate.php");
$rate = new Rate();
$result = $rate->getAllPost();
if(!empty($result)) {
foreach ($result as $tutorial) {
?>
<tr>
<td valign="top">
<div class="feed_title"><?php echo $tutorial["title"]; ?></div>
<div id="tutorial-<?php echo $tutorial["id"]; ?>">
<input type="hidden" name="rating" id="rating" value="<?php echo $tutorial["rating"]; ?>" />
<ul onMouseOut="resetRating(<?php echo $tutorial["id"]; ?>);">
  <?php
  for($i=1;$i<=5;$i++) {
  $selected = "";
  if(!empty($tutorial["rating"]) && $i<=$tutorial["rating"]) {
	$selected = "selected";
  }
  ?>
  <li class='<?php echo $selected; ?>' onmouseover="highlightStar(this,<?php echo $tutorial["id"]; ?>);" onmouseout="removeHighlight(<?php echo $tutorial["id"]; ?>);" onClick="addRating(this,<?php echo $tutorial["id"]; ?>);">★</li>  
  <?php }  ?>
<ul>
</div>
<div><?php echo $tutorial["description"]; ?></div>
</td>
</tr>
<?php }} ?>

<!DOCTYPE html>
<html>
<head>
	<title>rating</title>
	<!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
	<!-- <script type="text/javascript">
		function esend() {
			Email.send({ 
	        Host: "smtp.gmail.com", 
	        Username: "ziyauddin270499@gmail.com", 
	        Password: "9460558737", 
	        To: 'ziyazindagi1999@gmail.com', 
	        From: "ziyauddin270499@gmail.com", 
	        Subject: "Sending Email using javascript", 
	        Body: "Well that was easy!!", 
	      }) 
	        .then(function (message) { 
	          alert("mail sent successfully") 
	        }); 
		}
	</script> -->
</head>
<body>
	
	<script type="text/javascript">
		function highlightStar(obj,id) {
	removeHighlight(id);		
	$('.demo-table #tutorial-'+id+' li').each(function(index) {
		$(this).addClass('highlight');
		if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
			return false;	
		}
	});
}

function removeHighlight(id) {
	$('.demo-table #tutorial-'+id+' li').removeClass('selected');
	$('.demo-table #tutorial-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
	$('.demo-table #tutorial-'+id+' li').each(function(index) {
		$(this).addClass('selected');
		$('#tutorial-'+id+' #rating').val((index+1));
		if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
			return false;	
		}
	});
	$.ajax({
	url: "add_rating.php",
	data:'id='+id+'&rating='+$('#tutorial-'+id+' #rating').val(),
	type: "POST"
	});
}

function resetRating(id) {
	if($('#tutorial-'+id+' #rating').val() != 0) {
		$('.demo-table #tutorial-'+id+' li').each(function(index) {
			$(this).addClass('selected');
			if((index+1) == $('#tutorial-'+id+' #rating').val()) {
				return false;	
			}
		});
	}
} 
	</script>
</body>
</html>