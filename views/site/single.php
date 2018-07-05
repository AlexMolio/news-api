<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Новость</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="https://www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="template/css/zerogrid.css">
	<link rel="stylesheet" href="template/css/style.css">
	
	<!-- Custom Fonts -->
    <link href="template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="template/css/menu.css">
	<script src="template/js/jquery1111.min.js" type="text/javascript"></script>
	<script src="template/js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="template/owl-carousel/owl.carousel.css" rel="stylesheet">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body class="single-page">
	<div class="wrap-body">
		<header class="">
			<div class="logo">
				<a href="#">zVintauge</a>
				<span>Collectible Vintage & Antique Photos</span>
			</div>
			<div id="cssmenu" class="align-center">
				<ul>
					<li><a href="index.html"><span>Home</span></a></li>
					<li><a href="gallery.html"><span>Gallery</span></a></li>
					<li class="has-sub"><a href="archive.html"><span>Blog</span></a>
						<ul>
							<li class="has-sub"><a href="#"><span>Item 1</span></a>
								<ul>
									<li><a href="#"><span>Sub Item</span></a></li>
									<li class="last"><a href="#"><span>Sub Item</span></a></li>
								</ul>
							</li>
							<li class="has-sub"><a href="#"><span>Item 2</span></a>
								<ul>
									<li><a href="#"><span>Sub Item</span></a></li>
									<li class="last"><a href="#"><span>Sub Item</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="active"><a href="single.html"><span>About</span></a></li>
					<li class="last"><a href="contact.html"><span>Contact</span></a></li>
				</ul>
			</div>
			<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="template/images/slide1.jpg" />
				</div>
				<div class="item">
					<img src="template/images/slide2.jpg" />
				</div>
				<div class="item">
					<img src="template/images/slide3.jpg" />
					
				</div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
							<article class="single-post zerogrid">
								<div class="row wrap-post"><!--Start Box-->

									<?php foreach ($newsItem as $key => $newsItem) 
									{ ?>

									<div class="entry-header">
										<span class="time"><?php echo $newsItem['date']; ?></span>
										<h2 class="entry-title"><a href="#"><?php echo $newsItem['title']; ?></a></h2>
										<span class="cat-links"><a href="#">BUSINESS</a>, <a href="#">LIFESTYLE</a></span>
									</div>
									<div class="post-thumbnail-wrap">
										<img src="<?php echo $newsItem['image']; ?>">
									</div>
									<div class="entry-content">
										<div class="excerpt"><p><?php echo $newsItem['text']; ?></p>
										<div class="note">
										  <ol>
											<li>Lorem ipsum</li>
											<li>Sit amet vultatup nonumy</li>
											<li>Duista sed diam</li>
										  </ol>
										  <div class="clear"></div>
										</div>
										<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
									</div>
								</div>
							<?php } ?>
							</article>
							<div class="zerogrid">
								<div class="comments-are">
									<div id="comment">
										<h3>Leave a Reply</h3>
										<span>Your email address will not be published. Required fields are marked </span>
										<form name="comment_form" id="comment_form" method="post" action="">
											<label>
											<span>Comment:</span>
											<textarea name="message" id="message"></textarea>
											</label>
											<label>
											<span>Name:</span>
											<input type="text"  name="name" id="name" required>
											</label>
											<label>
											<span>Email:</span>
											<input type="email"  name="email" id="email" required>
											</label>
											<center><input class="sendButton" type="submit" name="submitcomment" value="Submit"></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-4 col-footer-1">
						<div class="wrap-col">
							<h3 class="widget-title">About Us</h3>
							<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
						</div>
					</div>
					<div class="col-1-4 col-footer-2">
						<div class="wrap-col">
							<h3 class="widget-title">Recent Post</h3>
							<ul>
								<li><a href="#">MOST VISITED COUNTRIES</a></li>
								<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
								<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
								<li><a href="#">STARTUP COMPANY’S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-4 col-footer-3">
						<div class="wrap-col">
							<h3 class="widget-title">Tag Cloud</h3>
							<a href="#">animals</a>
							<a href="#">cooking</a>
							<a href="#">countries</a>
							<a href="#">city</a>
							<a href="#">children</a>
							<a href="#">home</a>
							<a href="#">likes</a>
							<a href="#">photo</a>
							<a href="#">link</a>
							<a href="#">law</a>
							<a href="#">shopping</a>
							<a href="#">skate</a>
							<a href="#">scholl</a>
							<a href="#">video</a>
							<a href="#">travel</a>
							<a href="#">images</a>
							<a href="#">love</a>
							<a href="#">lists</a>
							<a href="#">makeup</a>
							<a href="#">media</a>
							<a href="#">password</a>
							<a href="#">pagination</a>
							<a href="#">wildlife</a>
						</div>
					</div>
					<div class="col-1-4 col-footer-4">
						<div class="wrap-col">
							<h3 class="widget-title">Gallery</h3>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="template/images/11.jpg"></a>
										<a href="#"><img src="template/images/1.jpg"></a>
										<a href="#"><img src="template/images/13.jpg"></a>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="template/images/10.jpg"></a>
										<a href="#"><img src="template/images/9.jpg"></a>
										<a href="#"><img src="template/images/4.jpg"></a>
									</div>
								</div>
								<div class="col-1-3">
									<div class="wrap-col">
										<a href="#"><img src="template/images/2.jpg"></a>
										<a href="#"><img src="template/images/6.jpg"></a>
										<a href="#"><img src="template/images/5.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="zerogrid bottom-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-vimeo"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="copyright">
					Copyright @ - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>