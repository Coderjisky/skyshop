<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SkyShop</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">          <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
	<header><!-- header start -->
        <input type="checkbox" id="chk1">
        <div class="logo"><h1>Pakaha</h1></div>
        <div class="search-box"><!-- search-box start -->
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- search-box end -->
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu"><!-- menu start -->
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div> <!-- menu end -->
    </header> <!-- header end -->
    
    <div class="container" id="slider"><!-- container start -->
        <div class="col-md-12"><!-- col-md-12 start -->
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide start -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner"><!-- carousel-inner start -->
                    <div class="item active">
                        <img src="Admin_area/slider_images/2.jpg">
                    </div>
                    <div class="item">
                        <img src="Admin_area/slider_images/2.jpg">
                    </div>
                    <div class="item">
                        <img src="Admin_area/slider_images/3.jpg">
                    </div>
                    <div class="item">
                        <img src="Admin_area/slider_images/4.webp">
                    </div>
                </div><!-- carousel-inner end -->
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                	<span class="glyphicon glyphicon-chevron-left"></span>
                	<span class="sr-only">Previous</span>
                </a>
                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                	<span class="glyphicon glyphicon-chevron-right"></span>
                	<span class="sr-only">Next</span>
                </a>
            </div><!-- carousel slide end -->
        </div><!-- col-md-12 end -->
    </div><!-- container end -->

    <div id="advantage"><!-- advantage start -->
    	<div class="container"><!-- container start -->
    		<div class="col-sm-4"><!-- col-sm-4 start -->
    			<div class="box same-height"><!-- box same-height start -->
    				<div class="icon"><!-- icon start -->
    					<i class="fa fa-heart"></i>
    				</div><!-- icon end -->
    				<h3><a href="#"></a>BEST PRICES </h3>
    				<p>You can check on all others sites about the prices and than compare with us.</p>
    			</div><!-- box same-height end -->
    		</div><!-- col-sm-4 end -->

    		<div class="col-sm-4"><!-- col-sm-4 start -->
    			<div class="box same-height"><!-- box same-height start -->
    				<div class="icon"><!-- icon start -->
    					<i class="fa fa-heart"></i>
    				</div><!-- icon end -->
    				<h3><a href="#"></a>100% SATISFACTION GUARANTEED FROM US. </h3>
    				<p>Free returns on everything for 3 months.</p>
    			</div><!-- box same-height end -->
    		</div><!-- col-sm-4 end -->

    		<div class="col-sm-4"><!-- col-sm-4 start -->
    			<div class="box same-height"><!-- box same-height start -->
    				<div class="icon"><!-- icon start -->
    					<i class="fa fa-heart"></i>
    				</div><!-- icon end -->
    				<h3><a href="#"></a>WE LOVE OUR CUSTOMERS</h3>
    				<p>We are known to provide best possible service ever.</p>
    			</div><!-- box same-height end -->
    		</div><!-- col-sm-4 end -->

    	</div><!-- container end -->
    </div><!-- advantage end -->


       <!-- Latest compiled JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>