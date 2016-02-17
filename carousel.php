<!--carousel code-->
<div class="row-fluid">
		  <div class="col-lg-12">

		  	 <div id="artCarousel" class="carousel slide">
		  	 <ol class="carousel-indicators">
		  	 <li data-target="#artCarousel" data-slide-to="0" class="active"></li>
		  	 <li data-target="#artCarousel" data-slide-to="1" ></li>
		  	 <li data-target="#artCarousel" data-slide-to="2" ></li>
		  	 <li data-target="#artCarousel" data-slide-to="3" ></li>
		  	 <li data-target="#artCarousel" data-slide-to="4" ></li>
		  	 	</ol>
		  	  <div class="carousel-inner">

				<div class="item active"><img src="_images/banner2.jpg" alt="">
				<div class="carousel-caption">
					<h2 class="maintopicarousel">CRESCAT RESIDENCIES</h2>
					<p class="maintopicarousel">Crescat Residencies offers the modern luxurious, fully furnished apartments in the most sought after location in Colombo</p>
				   </div>
				</div>
	    		 <div class="item"><a href="http://www.rouxacademy.com/" target="_blank"><img src="_images/banner2.jpg" alt="Click to visit Roux Academy."></a></div>
        		<div class="item"><img src="_images/banner2.jpg" alt=""></div>
				<div class="item"><img src="_images/banner2.jpg" alt=""></div>
  				<div class="item"><img src="_images/banner2.jpg" alt=""></div>

		  	</div><!-- end carousel-inner-->
		  	<a class="left carousel-control" href="#artCarousel" data-slide="prev">&lsaquo;</a><a class="right carousel-control" href= "#artCarousel" data-slide="next">&rsaquo;</a>


		  </div><!--end artCarousel-->

		  </div><!-- end colum 12-->
		</div><!-- end row-->


		<!-- javascript -->
		<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custome.js"></script>-->
	<?php
    include 'url/url.php';
	$url = new Url();
	echo'<script src="http://code.jquery.com/jquery-latest.min.js"></script>';
	echo'<script src="'.$url->home_base_url().'js/bootstrap.min.js"></script>';
	echo'<script src="'.$url->home_base_url().'js/custome.js"></script>';
	;?>