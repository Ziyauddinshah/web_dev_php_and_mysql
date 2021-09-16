<!DOCTYPE html>
<html>
<head>
	<title>start</title>
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

<body>
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
    <br><br>
    <div class="container">
	  <ul class="list-group" id="radio-list" >
	    <li class="list-group-item d-flex justify-content-between align-items-center" >
	      <img src="https://cdn.onlineradiobox.com/img/logo/6/3906.v6.png" >
	      <span style="padding-left: 20px; padding-right: 20px;">  91.1 Radio City FM </span>
	      <button class="play-btn" onclick='playRadio("radio-city")' >
	        <audio id="radio-city" style="display: none;">
	        <source src="https://prclive1.listenon.in/">
	      </audio>
	      <span class="fa fa-play-circle" style="font-size:50px;color:#0056b9">
	      </span>
	    </button>
	    </li>
	    <li class="list-group-item d-flex justify-content-between align-items-center" >
	      <img src="https://cdn.onlineradiobox.com/img/logo/7/60907.v12.png" >
	      <span style="padding-left: 20px; padding-right: 20px;">  Retro Bollywood  </span>
	      <button class="play-btn" onclick='playRadio("retro-bollywood")' >
	        <audio id="retro-bollywood" style="display: none;"><source src="https://stream.zeno.fm/60ef4p33vxquv"></audio>
		      <span class="fa fa-play-circle" style="font-size:50px;color:#c5a31f;"></span>
		    </button>
	    </li>
	    <li class="list-group-item d-flex justify-content-between align-items-center" >
	      <img src="https://cdn.onlineradiobox.com/img/logo/1/3791.v2.png" >
	      <span style="padding-left: 20px; padding-right: 20px;">  FM Rainbow </span>
	      <button class="play-btn" onclick='playRadio("hits-of-bollywood")' >
	        <audio id="hits-of-bollywood" style="display: none;"><source src="http://64.71.79.181:5124/stream"></audio>
	      	<span class="fa fa-play-circle" style="font-size:50px;color:#000000;"></span>    
	      </button>
	    </li>
	    <li class="list-group-item d-flex justify-content-between align-items-center" >  
	      <img src="https://cdn.onlineradiobox.com/img/logo/3/78503.v10.png" >
	      <span style="padding-left: 20px; padding-right: 20px;">  Bollywood Punjabi Radio </span>
	      <button class="play-btn" onclick='playRadio("bollywood-pubjabi-radio")' >
	      	<audio id="bollywood-pubjabi-radio" style="display: none;"><source src="https://stream.zeno.fm/1k0y9f0cm0quv"></audio>     
	        <span class="fa fa-play-circle" style="font-size:50px;color:#932121;"> </span>
	  	  </button>
	    </li>
	    <!-- <li >
	      <div class="container">
		      <button class="float-right" id="close-btn-radio">
			    <span style='font-size:20px; '>&#10006;</span>
			  </button>
		  </div>
	    </li> -->
	  </ul>
	</div>
	<div class=" container-header ">
        <div class="jumbotron hero-image  text-center mb-0" id="bg-image-text">
          <h1 class=" text-center    welcome-heading">Welcome</h1>
          <p class="text-center  welcome-heading ">to</p>
          <h1 class=" text-center   welcome-heading notranslate">Baila Bollywood</h1>
        </div>
    </div>
    <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered" role="document">
	      <div class="modal-content">
	        <div class="modal-header ">
	          <h5 class="modal-title ml-auto mr-auto" id="exampleModalLongTitle"><i class="fa fa-id-card mr-3" style="color:#f5af19;"></i>Contacto</h5>
	          <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	        </div>
	        <div class="modal-body">
	          <form class="contact-us" id="contact-form" action="/contact-us" method="POST">
	            <div class="form-group ">
		          <label for="txtname"  class="bg-white name-label"> <i style="color:#00F260 ;" class="fa fa-user ml-1 mr-2"></i>Correo Electrónico 
		          </label>
		          <input type="email"  required class="form-control" id="txtname" name="mail" placeholder="Enter Your Name">
		        </div>
		        <div class="form-group ">
		          <label for="txtsubject"  class="bg-white subject-label"><i style="color:#ec2F4B;" class="fa fa-book mr-1"></i> Asunto</label>
		          <input type="text" name="subject"  required class="form-control" id="txtsubject" placeholder="Enter the Subject">
		        </div>
		        <div class="form-group">
		          <label for="message" class="bg-white email-label"> <i style="color:#667db6 ;" class="fa fa-comments  ml-1 mr-2"></i>Mensaje</label>
		          <textarea style="height:200px;" class="form-control"   id="message" placeholder="Type Your Query Here"></textarea>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-close" data-dismiss="modal">Cerrar</button>
		          <input type="submit" class="btn btn-save" value="Guardar Cambios " />
		        </div>
	          </form>
	        </div>
	      </div>
	    </div>
	</div> -->

	<section class="baila-section " style="background-color: white;">
	    <div class="container section_one-background">
	      <div class="text-center p-0">
	        <h2 class="display-3 heading-section">Danza y Música Clásica de la India </h2>
	        <div class="line mb-3"></div>
	        <img src="https://www.bailabollywood.com/images/dance-indian.jpg" class="traditional-dance-img ml-auto mr-auto mb-3" alt="Indian Dance image" height="350px" />
	        <div class="indian_dance-music-history indian-dance-music-spanish notranslate">
	          <p>
	            <a href="https://es.wikipedia.org/wiki/India" target="_blank" title="India increíble">India</a> es famosa por sus danzas 
	            clásicas, tan diversas como su cultura misma; presentes en la mayoría de sus estados y provincias, estas danzas son un 
	            medio de expresión y representación de historias compiladas en textos mitológicos y religiosos, así como de la tradición 
	            oral de los pueblos originarios.<br><br>
	            Algunas de las características más importantes de estas danzas, son el significado del movimiento de las manos, los gestos 
	            y las posturas corporales; tres aspectos que configuran las actuaciones de danza clásica india, y que engloban el ritmo, 
	            la expresión y el espacio escénico en su totalidad. Además, el vestuario tradicional otorga un significado estético y 
	            profundo, que difiere dependiendo del estilo de danza y la región donde se practica. 
	            <br><br>
	            Por ejemplo, los bailarines de <a href="https://es.wikipedia.org/wiki/Bharatanatyam" target="_blank"
	            title="Forma de danza bharatnatyam">Bharatnatyam</a> usan un sari, mientras que los bailarines de <a
	            href="https://en.wikipedia.org/wiki/Kathak" target="_blank" title="Kathak Dance Form"> Kathak</a> usan un anarkali. 
	            Las diferencias, son notables, pero es precisamente esto lo que diversifica la cultura dancística de India y la 
	            pone en contacto con el exterior. Muchas formas de danza clásica india han sufrido grandes cambios al ponerse en 
	            contacto con la cultura occidental; sin embargo, se ha logrado mantener su esencia y su registro histórico a 
	            través del tiempo. 
	            <br><br>
	            Un elemento fundamental de la tradición dancística de India es la música, la cual incluye múltiples variedades, desde 
	            rap punjabi, música clásica del norte y sur de la India, música folklórica, música Bollywood, hasta desi rock y desi pop. 
	            Pero sin lugar a dudas, las canciones más famosas provienen del cine Bollywood, son tan populares que suelen bailarse en 
	            bodas, cumpleaños y cualquier tipo de celebración. 
	            <br><br>
	            A los indios les encanta bailar y probar nuevos ritmos. La danza y la música, han sido parte integral de la cultura india 
	            desde tiempos inmemoriales; ya sea música devocional, o un buen bollywood blast, en India siempre hay disposición para 
	            bailar y disfrutar.
	            <br><br>
	        </div>
	      </div>
	    </div>
	    <div class="row container mt-5 row-image ml-auto mr-auto ">
	      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6   mb-3">
	        <a href="https://www.bailabollywood.com/images/lady-playing-sitar.jpg" target="_blank">
	          <img class="image-gallery  " src="https://www.bailabollywood.com/images/lady-playing-sitar.jpg" style="width: 100%;height: 370px" alt="Lady with Sitar">
	        </a>
	      </div>
	      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6  mb-3">
	        <a href="https://www.bailabollywood.com/images/painting-5.jpg" target="_blank" >
	          <img class="image-gallery " src="https://www.bailabollywood.com/images/painting-5.jpg" style="width: 100%;height: 370px"  alt="painting image">
	        </a>
	      </div>
	      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6  mb-3">
	        <a href="https://www.bailabollywood.com/images/painting-4.jpg" target="_blank">
	          <img class="image-gallery  " src="https://www.bailabollywood.com/images/painting-4.jpg" style="width: 100%;height: 370px"  alt="painting-image 4">
	        </a>
	      </div>
	      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6  mb-3">
	        <a href="https://www.bailabollywood.com/images/painting-2.jpg" target="_blank">
	          <img class="image-gallery" src="https://www.bailabollywood.com/images/painting-2.jpg" style="width: 100%;height: 370px"  alt="painting image 2">
	        </a>
	      </div>
	    </div>
	    </div>    
	</section>
	<section class="baila-section section-two mb-5" id="about">
	    <div class="container">
	      <div class=" section_two-about-us text-center  ">
	        <h2 class="about-heading display-2 section-heading heading-section  ">Sobre<br>Baila Bollywood</h2>
	        <div class="line mt-3 mb-5 "></div>
	        <p class="about_us-paragraph spanish_translation text-justify notranslate">
	          <strong>BailaBollywood</strong> trabaja sobre la misión de ofrecer al mundo hispanohablante una experiencia de primera mano 
	          de la cultura india, con especial énfasis en la música, la danza, y el cine; generamos contenido independiente, diverso y 
	          totalmente en idioma español. 
	          <br><br>
	          Queremos acercar la cultura de la India al mundo hispanohablante, ampliar los horizontes a través de diversas formas de 
	          expresión, y reafirmar el vínculo cultural entre naciones. Nuestro objetivo es construir relaciones sólidas entre la India 
	          y los países de habla hispana, a través del arte y el conocimiento.
	        </p>
	      </div>
	    </div>    
	</section>
    <div class="section-five review-slider" id="blogs">
    <h1 class="section-heading text-white heading-section mx-5 mt-5 ml-5 mb-5 display-3 text-center">Nuestro Blog
  </h1>
    <div class="swiper-container container swiper-reviews">
      <div class="swiper-wrapper ">
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/898/1*iurEmyxihEqRdgqBC4FYhw.jpeg>
          <a href=https://medium.com/@bailabollywood20/hindi-kya-hai-41c6b4885c8b?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">Hindi, kya hai?</a>
          <p class="blog-date mt-5">Sat, 19 Sep 2020 02:20:05 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/1000/1*qtzky5ZiyGUZG3jsIK3msQ.png>
          <a href=https://medium.com/@bailabollywood20/m%C3%A9xico-en-india-india-en-m%C3%A9xico-65c98040aa0a?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">México en India, India en México</a>
          <p class="blog-date mt-5">Fri, 11 Sep 2020 22:21:09 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/650/1*wLCXV8qAseus570OiqTmGQ.png>
          <a href=https://medium.com/@bailabollywood20/covid-en-india-una-oportunidad-para-el-ingenio-y-la-tecnolog%C3%ADa-b037b8da061a?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">COVID en India, una oportunidad para el ingenio y la tecnología</a>
          <p class="blog-date mt-5">Fri, 04 Sep 2020 17:36:06 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/1024/1*Jj1QON1Q6-i9GcIrA3eBIQ.png>
          <a href=https://medium.com/@bailabollywood20/qu%C3%A9-es-y-de-d%C3%B3nde-viene-ganesh-chaturthi-e566c0193c1e?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">¿Qué es y de dónde viene Ganesh Chaturthi?</a>
          <p class="blog-date mt-5">Fri, 28 Aug 2020 16:19:46 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/564/0*1m7sQsvtw-vN7dyj>
          <a href=https://medium.com/@bailabollywood20/mujeres-que-aman-mujeres-que-danzan-tawaifs-en-el-cine-bollywood-y-vedettes-en-el-cine-de-f8e99f89f592?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">Mujeres que aman, mujeres que danzan: tawaifs en el cine Bollywood y vedettes en el cine de…</a>
          <p class="blog-date mt-5">Fri, 21 Aug 2020 15:56:32 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://medium.com/_/stat?event=post.clientViewed&amp;referrerSource=full_rss&amp;postId=9d8985eddd1f>
          <a href=https://medium.com/@bailabollywood20/un-escrito-muy-interesante-felicidades-9d8985eddd1f?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">Un escrito muy interesante! Felicidades!</a>
          <p class="blog-date mt-5">Sun, 16 Aug 2020 18:07:53 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/800/0*F77BUwxbApZN9Vta>
          <a href=https://medium.com/@bailabollywood20/el-camino-hacia-la-independencia-de-la-india-47b9e1964d33?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">El camino hacia la Independencia de la India</a>
          <p class="blog-date mt-5">Fri, 14 Aug 2020 16:11:11 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/685/0*Fas4Ul2pcoIfVJiL>
          <a href=https://medium.com/@bailabollywood20/raksha-bandhan-un-fuerte-v%C3%ADnculo-entre-hermano-y-hermana-f08fbcd6e2f4?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">Raksha Bandhan: un fuerte vínculo entre hermano y hermana</a>
          <p class="blog-date mt-5">Fri, 07 Aug 2020 14:02:51 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/800/0*xA4oq17Iq2KMYGg4>
          <a href=https://medium.com/@bailabollywood20/taj-mahotsav-toda-una-fiesta-en-torno-a-un-monumento-e51d8c47693c?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">Taj Mahotsav: toda una fiesta en torno a un monumento</a>
          <p class="blog-date mt-5">Mon, 18 May 2020 18:57:23 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <div class="overlay-blog"></div>
          <img class="review-image" alt="blog-images" src=https://cdn-images-1.medium.com/max/1024/0*vW_L1RvgEYwAh31U>
          <a href=https://medium.com/@bailabollywood20/historias-que-llegan-a-bollywood-4ae32d65edba?source=rss-33cfe9a65656------2 style=" text-decoration:none; color:white; font-size: 1.5rem;" class="blog-name mb-5"
            target="_blank">Historias que llegan a Bollywood</a>
          <p class="blog-date mt-5">Thu, 14 May 2020 17:22:42 GMT</p>
        </div>
        
        <div class="swiper-slide notranslate">
          <a href="https://medium.com/@bailabollywood20" style=" text-decoration:none; "
            class="medium-blog-link mb-5 btn btn-light " target="_blank">Show More</a>
          <img class="review-image" src="/images/video-frame-img.jpeg" alt="vid frame image">
        </div>
      </div>
      <br>
      <!-- Add Pagination -->

      <!-- Add Arrows -->
      <div class="swiper-button-next swiper-btn "></div>
      <div class="swiper-button-prev swiper-btn"></div>
    </div>
  </div>

    <section class="baila-section section-four" id="pop-categ">
      <h2 class="display-2 popular-artist-heading heading-section text-center">Descubrir</h2>
      <div class="line mt-4 mb-4"></div>
      <h3 class="display-3 text-center heading-section">Artistas más populares</h3>
      <div class="container mt-3">
        <div class="row">
          <div class=" col-sm-4 ">
            <iframe class="popular-artist-videos" src="https://www.youtube.com/embed/j2t4a0233dU" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class=" col-sm-4 ">
            <iframe class="popular-artist-videos" src="https://www.youtube.com/embed/pXf-jeql3-k" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class=" co l-sm-4 ">
	          <iframe class="popular-artist-videos" src="https://www.youtube.com/embed/FqMB9pWTJpk" frameborder="0"
	          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	        </div>
        </div>
        
        <div class="row mt-5 justify-content-center ">
          <a class="  load-more btn font-weight-bold" href="/login" target="_self"
          title="Load More Videos">&#9733;&nbsp;&nbsp;&nbsp;Load More.&nbsp;&nbsp;&nbsp;&#9733;</a>
        </div>
      </div>
      </div>
    </section>


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
</body>
</html>