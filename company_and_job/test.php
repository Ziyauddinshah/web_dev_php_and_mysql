<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&language=en"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<script>
$(document).ready(function(){
 // load_data();
 // function load_data(query)
 // {
 //  $.ajax({
 //   url:"add.php",
 //   method:"POST",
 //   data:{query:query},
 //   success:function(data)
 //   {
 //    $('#result').html(data);
 //   }
 //  });
 // }
 $('#search').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
  	alert("hii");
   // load_data(search);
  }
  else
  {
  	alert("bye");
   // load_data();
  }
 });
});
</script>
</head>
<body>
<div class="container-fluid">       
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <h1>Techjunkgigs</h1> 
  <p><h3>Live Search</b></h3>
  <div class="wall">
    <section class="content">
	      <div class="box box-default">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="search" id="search" placeholder="Search" class="form-control" />
        <div id="result"></div>
        </div>
	</div>	
        </div>
        </div>
        </section>
   </div>
 </div>
 </div>
</body>
</html>