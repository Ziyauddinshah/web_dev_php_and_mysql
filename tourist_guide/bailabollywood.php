<!DOCTYPE html>
<html le="eng">
<head>
	<title>Place to Visit</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" type="text/css" href="./CSS/cart.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <style >
      .zoom:hover {
        transform: scale(1.06); 
      }
      .zoom {
        transition: transform .3s;
        margin: 0 auto;
      }
      .item{
        padding-right: 29px;  
      }
      /*.a{
      	word-spacing: 1.5cm
      }
      .c{
      	word-spacing: 1.5cm
      }*/
    </style>  
    <style>
        .collapsible {
          /*background-color: #777;*/
          /*color: white;*/
          cursor: pointer;
          /*padding: 18px;*/
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          /*font-size: 15px;*/
        }

        .active, .collapsible:hover {
          /*background-color: #555;*/
        }

        .content {
          /*padding: 0 18px;*/
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.2s ease-out;
          /*background-color: #f1f1f1;*/
        }
    </style>
</head>
<body onresize="getResolution1()">
    <nav class="navbar sticky-top navbar-expand-lg navbar-info bg-info" style="box-shadow: 0px 1.5px 4px #333333;">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col-md-2 col-lg-2 col-sm-4 col-xs-4">
                    <a class="navbar-brand p-0 m-0" href="/"><img src="https://www.bailabollywood.com/images/Spanish-bolo-natraj-transparent.png"  class="logo-navbar bg-danger" style="height: 40px;width: 40px;" ></a>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6 d-none d-sm-none d-md-block mt-2">
                    <h4 class="font-weight-600">
                        
                    </h4>
                </div>
                <div class="col-3"></div>
                <div class="col-3 mt-3 d-none d-sm-none d-md-block" >
                    <ul class="navbar-nav pl-5 text-align" style="margin-top: -15px;">
                        <li class="nav-item mr-3">
                            <a class="nav-link" style="color: black;font-size: 15px;font-weight: bold;" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link text-capitalize mr-3" style="color: black;font-size: 15px;font-weight: bold;" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-light " style="background-color: white;margin-top: 5px;">
          <button class="navbar-toggler bg-custom-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon my-toggler"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav " >
              <li class="nav-item">
                <div style="width: 60px;">
                
                </div>
              </li>
              <li class="nav-item">
                <a class=" font-weight-bold item" href="https://www.bailabollywood.com/" style="color: red;">Start </a>
              </li>
              <li class="nav-item">
                <a class=" font-weight-bold item" href="https://www.bailabollywood.com/equipo#toReach" style="color: red">Equipment </a>

              </li>
              <li class="nav-item">
                <a class=" font-weight-bold item" href="https://www.bailabollywood.com/canal-bollywood" style="color: red">Bollywood Channel</a>

              </li> 
              <li class="nav-item">
                <a class=" font-weight-bold item" href="https://www.bailabollywood.com/chai-con-baila-bollywood" style="color: red">Chai with Bollywood dance</a>
              </li> 
              <li class="nav-item">
                <a class=" font-weight-bold item" href="https://www.bailabollywood.com/danzas-folkloricas-de-India" style="color: red">Folk dances</a>

              </li> 
              <li class="nav-item">
                 <a class=" font-weight-bold item" href="https://www.bailabollywood.com/cafe-cultural" style="color: red">Cafe Cultural</a>

              </li> 
              <li class="nav-item">
                 <a class=" font-weight-bold item" href="https://www.bailabollywood.com/places" style="color: red">Travel to India</a>

              </li> 
              <li class="nav-item">
                 <a class=" font-weight-bold item" href="https://www.bailabollywood.com/blogs" style="color: red">Blogs</a>

              </li> 
              <li class="nav-item">
                 <a class=" font-weight-bold item" href="https://www.bailabollywood.com/sonidos-de-la-india" style="color: red">Sounds of India</a>

              </li> 
            </ul>
          </div>  
    </nav>
    <br><br><br>
<!-- <script>
  function getResolution1() {
    var x=$(document).width();
    if(x>600)
    {
        // $("ul").show();   
        $("#bt").hide();
    }
    else
    {
        // $("ul").hide();
        $("#bt").show();
    }  
  }
</script> -->
<!-- <script type="text/javascript">
    function bar(){
        $(".items12").toggle();
    }
</script> -->
<div class="text-align">
	<h2 class="text-center">Places to visit</h2>
	<p style="margin:10px 25px 20px 25px;"><b>India is a beautiful country, there is no doubt about that, its cultural diversity provides thousands of perspectives for the most intrepid traveler; from natural landscapes of incalculable beauty, to palaces, museums, temples, galleries and popular squares that leave anyone astonished; every corner of this wonderful country has something to offer.</b></p>
	<p style="margin:10px 25px 20px 25px;"><b>Dare to discover India and its best tourist places at the hands of Bollywood Dance, immerse yourself in the depths of its culture and traditions learning about the most popular sights and the most remote spaces of the country of a thousand colors.</b></p>	
</div>	<br><hr>
<div class="container">
	<div class="card-deck justify-content-center">
		<div class="card mb-4">
			<a href="https://www.bailabollywood.com/places/posts/5ef33d9d1adcce0c8cc2e8cf">
	            <img class="card-img-top img-fluid zoom" src="https://miro.medium.com/max/552/1*_aF_b88H9HpuDgIFJcK2VA.png" alt="Card image cap">
	        </a>
            <div class="card-body">
                <h4 class="card-title">1 Card title</h4><br>
                <p class="card-text"><h3>20 places to visit in New Delhi</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5ef8188958adde056651db10"><img class="card-img-top img-fluid zoom" src="https://addcrazy.com/wp-content/uploads/2018/11/d-paresh-articles-date-wise-2-11-2018-images-1200.jpeg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">2 Card title</h4><br>
                <p class="card-text"><h3>The religions of India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
        <div class="card mb-4">
        	<a href="https://www.bailabollywood.com/places/posts/5ef9959719c21a05c3d62a2e"><img class="card-img-top img-fluid zoom" src="https://miro.medium.com/max/345/1*KBblW1BALWUQDyNkvavPOg.png" alt="Card image cap"></a>
            
            <div class="card-body">
                <h4 class="card-title">3 Card title</h4><br>
                <p class="card-text"><h3>The seven wonders of India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
        <div class="card mb-4">
        	<a href="https://www.bailabollywood.com/places/posts/5ef9984719c21a05c3d62a37"> <img class="card-img-top img-fluid zoom" src="https://www.qs.com/wp-content/uploads/2016/03/shutterstock_208522960.jpg" alt="Card image cap"></a>
           
            <div class="card-body">
                <h4 class="card-title">4 Card title</h4><br>
                <p class="card-text"><h3>100 facts you should know before visiting India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
         <!-- <div class="w-100 d-none d-lg-block d-xl-none"> wrap every 4 on lg</div> -->
         <!-- <div class="w-100 d-none d-xl-block"><-- wrap every 5 on xl--</div> -->
        <div class="card mb-4">
        	<a href="https://www.bailabollywood.com/places/posts/5ef999ff19c21a05c3d62a38"><img class="card-img-top img-fluid zoom" src="https://miro.medium.com/max/1400/1*msCzJx_JR5okUT4A2hhbwg.jpeg" alt="Card image cap"></a>
            
            <div class="card-body">
                <h4 class="card-title">5 Card title</h4><br>
                <p class="card-text"><h3>Demographics of India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        
        <div class="card mb-4">
        	<a href="https://www.bailabollywood.com/places/posts/5ef99d1419c21a05c3d62a3c"><img class="card-img-top img-fluid zoom" src="https://i.pinimg.com/originals/a9/4f/ce/a94fce55f52659816c35c26666792782.jpg" alt="Card image cap"></a>
            
            <div class="card-body">
                <h4 class="card-title">6 Card title</h4><br>
                <p class="card-text"><h3>Traditions of India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
        <!-- <div class="w-100 d-none d-md-block d-lg-none"><-- wrap every 3 on md--</div> -->
        <div class="w-100 d-none d-xl-block"><!-- wrap every 3 on xl--></div>
        <div class="card mb-4">
        	<a href="https://www.bailabollywood.com/places/posts/5ef99fbb19c21a05c3d62a46"><img class="card-img-top img-fluid zoom" src="https://miro.medium.com/max/760/1*GDei12bPwuc2_ImPmt2bBA.gif" alt="Card image cap"></a>
            
            <div class="card-body">
                <h4 class="card-title">7 Card title</h4><br>
                <p class="card-text"><h3>Historical facts of India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-4">
        	<a href="https://www.bailabollywood.com/places/posts/5efaf0dd19c21a05c3d62a54"><img class="card-img-top img-fluid zoom" src="https://miro.medium.com/max/552/1*lkoXE-Mze5NmbBk5eXbCcw.jpeg" alt="Card image cap"></a>
            
            <div class="card-body">
                <h4 class="card-title">8 Card title</h4><br>
                <p class="card-text"><h3>Madhya Pradesh festivals</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
        <!-- <div class="w-100 d-none d-lg-block d-xl-none"><-- wrap every 4 on lg--</div> -->
        
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f0d7c2f679eb35a122d0af6"><img class="card-img-top img-fluid zoom" src="https://www.indianpanorama.in/blog/wp-content/uploads/2019/06/blog-cover1.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">9 Card title</h4><br>
                <p class="card-text"><h3>10 places to visit in India during the summer</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="w-100 d-none d-xl-block"><!-- wrap every 3 on xl--></div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f0d7fef679eb35a122d0b02"><img class="card-img-top img-fluid zoom" src="https://ihplb.b-cdn.net/wp-content/uploads/2011/02/Forts.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">10 Card title</h4><br>
                <p class="card-text"><h3>Top 10 Places to Visit in Rajasthan</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f0eab83e6a3b25f0f3e7aa9"><img class="card-img-top img-fluid zoom" src="https://www.india-tours.com/blog/wp-content/uploads/2019/03/museums-of-india-1200x675.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">11 Card title</h4><br>
                <p class="card-text"><h3>Top 10 Museums in India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f0eb011e6a3b25f0f3e7ab5"><img class="card-img-top img-fluid zoom" src="https://s3.amazonaws.com/assets.saam.media/files/styles/ui_large/s3/images/2019-10/Belcourt_Wisdom%20of%20the%20Universe_0.jpg?itok=vtgCYbiv" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">12 Card title</h4><br>
                <p class="card-text"><h3>Top 10 Art Galleries in India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f101a85e6a3b25f0f3e7ae9"><img class="card-img-top img-fluid zoom" src="https://cdn.theculturetrip.com/wp-content/uploads/2018/02/feature-image-v1-1.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">13 Card title</h4><br>
                <p class="card-text"><h3>British forts in India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f101d98e6a3b25f0f3e7af0"><img class="card-img-top img-fluid zoom" src="https://cdn.theculturetrip.com/wp-content/uploads/2017/11/uttarakhand-villages.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">14 Card title</h4><br>
                <p class="card-text"><h3>Top 15 Hiking Spots in India</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f12f245e6a3b25f0f3e7b19"><img class="card-img-top img-fluid zoom" src="https://london.wtm.com/__novaimages/5850909?v=637043845633300000" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">15 Card title</h4><br>
                <p class="card-text"><h3>Top 10 Places to Visit in Kerala</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f12f7abe6a3b25f0f3e7b25"><img class="card-img-top img-fluid zoom" src="https://www.incredible-northeastindia.com/images/assam-head.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">16 Card title</h4><br>
                <p class="card-text"><h3>Top 10 places to visit in Assam</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f14476fe6a3b25f0f3e7b46"><img class="card-img-top img-fluid zoom" src="https://i.ytimg.com/vi/K_8M-djmdX0/maxresdefault.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">17 Card title</h4><br>
                <p class="card-text"><h3>Bhubaneswar: The City of Temples</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f180219bceea105955677cd"><img class="card-img-top img-fluid zoom" src="https://lp-cms-production.imgix.net/2019-06/GettyImages-475540390_medium.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">18 Card title</h4><br>
                <p class="card-text"><h3>Varanasi: the eternal city</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f1fe063b018fa055ba1075b"><img class="card-img-top img-fluid zoom" src="https://b.zmtcdn.com/data/pictures/6/18933156/e7256704bca7767f5475a7ec7cef9a94.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">19 Card title</h4><br>
                <p class="card-text"><h3>Gastronomic records: Karim's Delhi</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-4">
            <a href="https://www.bailabollywood.com/places/posts/5f212e0c9f4ffb1290288541"><img class="card-img-top img-fluid zoom" src="https://lh6.googleusercontent.com/UYrZMj6l98Mln2qBKkMAD1MmqSYjDzn4G6TmKypsk6DLGoLN-hlZDUA-yJSJdPEfSBGeYZSLG341t6BIfOcHvR4pUNbbjA5Mkwke2d5KQeporJE9G_u92uxNDAIL89IAvKaMdL9I" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">20 Card title</h4><br>
                <p class="card-text"><h3>Gastronomic Records: Darjeeling Tea</h3></p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
        <div class="card mb-4">
            <a href="#"><img class="card-img-top img-fluid zoom" src="https://s3.amazonaws.com/assets.saam.media/files/styles/ui_large/s3/images/2019-10/Belcourt_Wisdom%20of%20the%20Universe_0.jpg?itok=vtgCYbiv" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">21 Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                
            </div>
            <div class="card-footer">
            	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
	</div>	
</div>
<section class="baila-section section-six " style="background-color: #b4b4b4;padding:0; margin: 0;">
    <div class="container-fluid" style="width: 100%; margin: auto; border: none;">
      <div class="row footer-row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 footer-left ">
          <div id="logo-float">            
          <a href="https://www.bailabollywood.com/" target="_blank"> <img class="footer-logo mt-5"
              src="https://www.bailabollywood.com/images/baila-bollywood-transparent-white.png" alt="spanish bolo" style="width: 140px; height: 140px;"></a>
          
          <a href="https://www.spanishbolo.com/" target="_blank"> <img class="footer-logo mt-5"
              src="https://www.bailabollywood.com/images/spanish-bolo-logo.png" style="max-width: 140px; max-height: 140px;" alt="spanish bolo"></a>
          </div>
          <p class="text-dark text-center mt-3">Our <a href="https://www.spanishbolo.com/" target="_blank">SpanishBOLO</a> and BailaBollywood projects explore the cultural corners of India and the Spanish-speaking world, to share these riches with our readers, and thus, strengthen the bond between both regions, creating a sense of community and social brotherhood.  
    </p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 footer-center">
          <h4 class="mt-5  display-5">Connect with us:</h4>
          <br>
          <div class="social-icons row justify-content-center">
            <a href="https://www.facebook.com/Baila-Bollywood-105697461007966/"
              class="col-4 fa fa-facebook text-center" style="font-size: 40px;" title="Facebook Link"  target="_blank" ></a>
            <a href="https://www.linkedin.com/in/baila-bollywood-3a3b031a1" class="col-4 fa fa-linkedin  text-center" style="font-size: 40px" title="Linkedin Link" target="_blank"></a>
            <a href="https://instagram.com/bailabollywood20?igshid=15jmz5uzyz1jj"
              class="col-4 fa fa-instagram text-center" style="font-size: 40px" title="Instagram Link" target="_blank"></a>
              <br><br><br><br>
            <a href="https://www.quora.com/share/Baila-Bollywood-on-Instagram-Introducing-Baila-Bollywood-3-days-to-go-bailabollywood-spanishculture-indianculture-bollywood-music-spanishbolo-1?ch=3&share=2cd5e92a&srid=uOprOw"
              style="font-size: 40px" title="Quora Link" class="col-4 fa fa-quora  text-center" target="_blank"></a>
            <a href=" https://link.medium.com/jSOvCnafY3" class="col-4 fa fa-medium  text-center" style="font-size: 40px" title="Medium Link" target="_blank"></a>
            <a href="https://www.youtube.com/channel/UCUb7jsujf73W8NaVYXqOZ1w?view_as=subscriber" class="col-4 fa fa-youtube  text-center" style="font-size: 40px" title="Youtube Link" target="_blank"></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 footer-right">
          <img src="https://www.bailabollywood.com/images/baila-bollywood-transparent-white.png" width="250px" height="300px" class="footer-right-img " alt="baila bollywood">
        </div>
      </div>
    </div>
</section>
  <div class="footer-section " >
        <span class="float-left" >
        <a style="text-decoration: underline;" href="#privacyPolicyModal" class="text-dark text-center  mb-1"  data-toggle="modal" data-target="#privacyPolicyModal">Privacy Policy</a>
	    </span>
	      <span class="float-right">
		    &copy; 2020 Copyright BailaBollywood
		  </span>
	</div>
	<!-- <script>
	  $(".target").each(function(){
	    let text = ( $(this).text());
	    text = text.substring(0,200);
	    text = text + "...."
	    let html = $.parseHTML(text);
	    $(this).empty();
	    $(this).append(html);
	  });
	</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>
</html>