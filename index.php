<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Rescue | An Animal Shelter PHP &amp; HTML Template</title>
		
		<meta name="Keywords" content=" " />
		<meta name="Description" content=" " />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="includes/js/flexslider-ver=3.9.1.css" type="text/css" media="all" />
		<link rel="stylesheet" href="includes/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		
		<!-- The next line calls the font for the headings from Google. You can customize this at Google.com/fonts */ -->
		<link href='http://fonts.googleapis.com/css?family=Merriweather:300' rel='stylesheet' type='text/css'>
		
		<!-- The Favicon -->
		<link rel="shortcut icon" href="images/favicon.png" />
	</head>
	<body class="content_left scheme_red">
		<section id="main_wrap">
			<header class="wrapper" id="header">
				<div class="container">
					<div id="main_menu" class="clearfix">
						<div class="clearfix">
							<a href="index.php.html" title="Rescue" class="the_logo_link">
								<img src="images/rescuelogo.png" alt="Rescue" id="logo" height="40" width="101.5" />
							</a>
							<div id="search_wrap">
								<div id="search_link"></div>
							</div>
							<nav id="menu_wrap">
								<div class="menu-main-menu-container">
									<ul id="menu-main-menu" class="menu">
										<li><a href="index.php.html" class="current_page">Home</a></li>
										<li><a href="index.php.html#" >Our Pets +</a>
											<ul class="sub-menu">
												<li><a href="pets-all.php.html" >All Pets</a></li>
												<li><a href="pets-animal.php.html" >Cats</a></li>
												<li><a href="pets-animal.php.html" >Dogs</a></li>
											</ul>
										</li>
										
										
										<li><a href="index.php.html#" >Page Templates +</a>
											<ul class="sub-menu">
												<li><a href="page.php.html" >Standard Page</a></li>

												<li><a href="page-full.php.html" >Full Width</a></li>
												<li><a href="page-contact.php.html" >Contact</a></li>
												<li><a href="page-extras.php.html" >Extras</a></li>

											</ul>
										</li>
										<li><a href="blog.php.html" >Blog</a></li>
									</ul>								
								</div>
							</nav>
						</div>
						<div id="searchform_wrap">
							<form method="get" id="searchform" action="#">
								<div>
									<input type="search" class="search_input" value="To search, type and hit enter" name="s" id="s" onfocus="if (this.value == 'To search, type and hit enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'To search, type and hit enter';}" />
									<input type="hidden" id="searchsubmit" value="Search" />
								</div>
							</form>
						</div>
					</div>
				</div>
			</header>
			<section class="wrapper" id="main_content">			
							<div id="slider_wrap">
					<ul class="slides">
						<li class="slide_image_wrap">
							<img width="2880" height="1000" src="images/slide1.jpg" alt="This is a slide" />
						</li>
						<li class="slide_image_wrap">
							<img width="2880" height="1000" src="images/slide2.jpg" alt="This is a slide" />
						</li>
						<li class="slide_image_wrap">
							<img width="2880" height="1000" src="images/slide3.jpg" alt="This is a slide" />
						</li>
					</ul>
				</div>
						
				<div class="container clearfix">
<div id="featured_pets">
	<h3>Pets of the Month</h3>
	<div id="featured_inner" class="clearfix">
		<div class="single_pet">
			<a href="pets-single.php.html" title="Charlie">
				<img width="400" height="200" src="images/pets/charlie-400x200.jpg" class="attachment-pet_month" alt="Charlie" />
			</a>
			<div class="mask">
				<h2>Charlie</h2>
				<p>Charlie is such a lover!</p>
				<a href="pets-single.php.html" title="Charlie" class="more_featured">Learn More About This Pet</a>
			</div>
		</div>
		<div class="single_pet">
			<a href="pets-single.php.html" title="Shorty">
				<img width="400" height="200" src="images/pets/shorty1-400x200.jpg" class="attachment-pet_month" alt="shorty1" />
			</a>
			<div class="mask">
				<h2>Shorty</h2>
				<p>Shorty has one ear that is always floppy, but that's okay by us!</p>
				<a href="pets-single.php.html" title="Shorty" class="more_featured">Learn More About This Pet</a>
			</div>
		</div>
	</div>
</div>
<div id="home_latest_friends" class="clearfix">
	<h4 class="entry-title" id="latest-friends-title">Our Newest Friends</h4>
	<div id="friends_wrap" class="clearfix">
		<a href="pets-single.php.html" class="single_latest_friend">
			<img width="180" height="180" src="images/pets/charlie-180x180.jpg" class="attachment-small_pet" alt="Charlie" />
		</a>
		<a href="pets-single.php.html" class="single_latest_friend">
			<img width="180" height="180" src="images/pets/archie1-180x180.jpg" class="attachment-small_pet" alt="Archie" />
		</a>
		<a href="pets-single.php.html" class="single_latest_friend">
			<img width="180" height="180" src="images/pets/mudi-180x180.jpg" class="attachment-small_pet" alt="Mudi" />
		</a>
		<a href="pets-single.php.html" class="single_latest_friend">
			<img width="180" height="180" src="images/pets/chance1-180x180.jpg" class="attachment-small_pet" alt="Chance" />
		</a>
		<a href="pets-single.php.html" class="single_latest_friend">
			<img width="180" height="180" src="images/pets/happy1-180x180.jpg" class="attachment-small_pet" alt="Happy" />
		</a>
		<a href="pets-single.php.html" class="single_latest_friend">
			<img width="180" height="180" src="images/pets/nora1-180x180.jpg" class="attachment-small_pet" alt="Nora" />
		</a>
		<a href="pets-single.php.html" class="single_latest_friend">
			<img width="180" height="180" src="images/pets/inga1-180x180.jpg" class="attachment-small_pet" alt="Inga" />
		</a>
		<a href="pets-single.php.html" class="single_latest_friend">
			<img width="180" height="180" src="images/pets/ollie-180x180.jpg" class="attachment-small_pet" alt="Ollie" />
		</a>
	</div>
</div>
<section id="home_widgets">
	<div id="home_widget_wrap" class="banner_widget_count2 rescue_email_banner clearfix">
		<aside class="widget">
			<h3 class="widgettitle">Welcome To Rescue</h3>
			<div class="textwidget">
				<p>Rescue is a HTML template for animal shelters. Easily display all of the pets available at your shelter.</p>
				<p>In this area you can display as many blocks of information that you like; simply chance the <em>banner_widget_count2</em> class to accomidate the number of info blocks you have here, from 1 to 5, or more than that can be <em>banner_widget_overflow</em> and the blocks will resize accordingly.</p>
			</div>
		</aside>
		<aside class="widget rescue_email_capture_wrap">
			<h3 class="widgettitle">Join Our Newsletter</h3>
			<div class="textwidget">Get the latest updates on our furry friends!</div>
			<div id="rescue_email_capture">
				<form name="rescue_email_capture" method="post" action="#">
					<input name="rescue-name" type="text" title="Name" Placeholder="Name"  />
					<input name="rescue-email" type="text" title="Email" Placeholder="Email" />
					<input name="Submit" type="submit" value="Submit" class="rescue-email-capture-submit" />
				</form>
			</div>
		</aside>
	</div>
</section>
<div class="posts-wrap">
	<section id="home_latest_posts" class="clearfix">
		<h4 class="entry-title" id="latest-posts-title">Latest Posts</h4>
		<article class="first_latest">
			<a href="blog-single.php.html" title="Meet Charlie">
				<img width="600" height="240" src="images/pets/charlie-600x240.jpg" class="attachment-big_latest" alt="Meet Charlie" />
			</a>
			<h4><a href="blog-single.php.html" title="Meet Charlie">Meet Charlie</a></h4>
			<div class="meta">
				February 24, 2013
			</div>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien.
			</p>
			<a href="blog-single.php.html" title="Meet Charlie">Read More &raquo;</a>
		</article>
		<article class="single_latest">
			<a href="blog-single.php.html" title="Meet Cindy" class="single_latest_img_link">
				<img width="275" height="110" src="images/pets/cindy1-275x110.jpg" class="attachment-single_latest" alt="Meet Cindy" />
			</a>
			<h4><a href="blog-single.php.html" title="Meet Cindy">Meet Cindy</a></h4>
			<div class="meta">
				January 24, 2013
			</div>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien.
			</p>
			<a href="blog-single.php.html" title="Meet Cindy">Read More &raquo;</a>
		</article>
		<article class="single_latest">
			<a href="blog-single.php.html" title="Meet Chester" class="single_latest_img_link">
				<img width="275" height="110" src="images/pets/chester1-275x110.jpg" class="attachment-single_latest" alt="Meet Chester" />
			</a>
			<h4><a href="blog-single.php.html" title="Meet Chester">Meet Chester</a></h4>
			<div class="meta">
				January 23, 2013
			</div>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien.
			</p>
			<a href="blog-single.php.html" title="Meet Chester">Read More &raquo;</a>
		</article>
	</section>
</div>

<div id="sidebar" >
	<aside id="socnets_wrap" class="clearfix">
		<div id="socnets">
			<a href="index.php.html#" title="Twitter" class="socnet-twitter"></a>
			<a href="index.php.html#" title="Facebook" class="socnet-facebook"></a>
			<a href="index.php.html#" title="Google+" class="socnet-google"></a>
			<a href="index.php.html#" title="Flickr" class="socnet-flickr"></a>
			<a href="index.php.html#" title="Tumblr" class="socnet-tumblr"></a>
			<a href="index.php.html#" title="Vimeo" class="socnet-vimeo"></a>
			<a href="index.php.html#" title="YouTube" class="socnet-youtube"></a>
		</div>
	</aside>
		<aside class="widget">
		<div class="widget_hours"><h4 class="widgettitle">Business Hours</h4>
			<div class="the_hours"><label>Monday</label>9:00 am - 8:00 pm</div>
			<div class="the_hours"><label>Tuesday</label>9:00 am - 8:00 pm</div>
			<div class="the_hours"><label>Wednesday</label>9:00 am - 8:00 pm</div>
			<div class="the_hours"><label>Thursday</label>9:00 am - 8:00 pm</div>
			<div class="the_hours"><label>Friday</label>9:00 am - 8:00 pm</div>
			<div class="the_hours"><label>Saturday</label>10:00 am - 12:00 pm</div>
			<div class="the_hours no_border"><label>Sunday</label>Closed</div>
			<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&ver=3.9.1'></script>
			<div class="pw_map_canvas" id="dcs_map_rescue" style="height: 200px; width: 100%"></div>
			<script type="text/javascript">
			var rescue_map;
			function pw_run_rescue_map(){
				var location = new google.maps.LatLng("41.8621253", "-87.6167867");
				var map_options = {
					zoom: 15,
					center: location,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				rescue_map = new google.maps.Map(document.getElementById("dcs_map_rescue"), map_options);
				var marker = new google.maps.Marker({
					position: location,
					map: rescue_map
				});
			}
			pw_run_rescue_map();
			</script>
		</div>
		<div class="business_location">
			<p>1410 S. Museum Campus Drive,<br />Chicago, IL 60605</p>
		</div>
	</aside>
	<aside class="widget">
		<h4 class="widgettitle">Categories</h4>
		<ul>
			<li>
				<a href="index.php.html#" title="Meet Our Pets">Meet Our Pets</a>
			</li>
			<li>
				<a href="index.php.html#" title="General Blog Posts">General Blog Posts</a>
			</li>
		</ul>
	</aside>
</div>				</div>			</section>			<footer id="footer" class="wrapper">
				<div class="container">
					<div id="footer_widgets" class="footer_widget_count3 clearfix">
						<div class="footer_widget">
							<h6 class="widgettitle">New Pets</h6>
							<ul class="lined_list">
								<li>
									<a href="index.php.html#" title="Cinderella">Cinderella</a>
								</li>
								<li>
									<a href="index.php.html#" title="Chester">Chester</a>
								</li>
								<li>
									<a href="index.php.html#" title="Winston">Winston</a>
								</li>
								<li>
									<a href="index.php.html#" title="Klaus">Klaus</a>
								</li>
								<li>
									<a href="index.php.html#" title="Liza">Liza</a>
								</li>
							</ul>
						</div>
						<div class="footer_widget">
							<div class="featured_user">
								<h6 class="widgettitle">Meet Jake</h6>			
								<div class="specific_user clearfix">
									<a href="index.php.html#" title="User Name">
										<img alt="User Name" src="http://0.gravatar.com/avatar/02cdeec360274d7d9f1aa85761f95dc8?s=58&d=http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=58&r=G" class="avatar" height="58" width="58" />
									</a>
									<strong><a href="index.php.html#" title="Jake Caputo">Jake Caputo</a></strong>
									<p>I'm a web designer and developer currently living just outside of Chicago, IL. I like coffee, comic books, and cats.  I'm also a big fan of The Beach Boys and the Chicago Bears.</p>
								</div>
							</div>
						</div>
						<div class="footer_widget">
						<h6 class="widgettitle">Make a Donation</h6>
							<p>This is just a little area with a button where you can link to a donation form either on <em>or</em> off your site! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida.</p>
							<a href="index.php.html#" class="button">Donate</a>
						</div>
					</div>
					<div id="post_footer">
						<div id="site_info" class="clearfix">
							<div class="left footer_menu_wrap clearfix">
								<div class="menu-footer-menu-container">
									<ul id="menu-footer-menu" class="menu">
										<li><a href="index.php.html">Home</a></li>
										<li><a href="pets-all.php.html">All Pets</a></li>
										<li><a href="page-full.php.html">Full Width Page</a></li>
										<li><a href="page.php.html">Standard Page</a></li>
										<li><a href="blog.php.html">Blog</a></li>
										<li><a href="page-contact.php.html">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="right">
								&copy; 2015 Rescue <span class="site_info_space">-</span>
								<span class="site_info_bloginfo">
									<a href="../../index.html" title="Rescue Template">Rescue Template</a> by <a href="http://designcrumbs.com" title="Design Crumbs">Design Crumbs</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</section>				<script type="text/javascript" src="includes/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="includes/fancybox/jquery.fancybox.js"></script>
		<!-- <script type="text/javascript" src="includes/js/jquery.sticky.js"></script> // uncomment this to use the sticky header -->
		<script type="text/javascript" src="includes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="includes/js/jquery.mobilemenu.js"></script>
		<script type="text/javascript" src="includes/js/rescue.js"></script>
	</body>
</html>