<!DOCTYPE html>
<html lang="en">
<head>
<title>ccndep</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->  
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ccndep" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--//fonts-->	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
<script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
		<style>
		.address{font-size:20px;}
		</style>
</head>
<body>
	<!-- header -->
	
			<?php include 'header.php' ;?>

	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3ls-inner-banner">
		<div class="container">
			<h2>Contact Us</h2>
			<label></label>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //breadcrumbs -->
	
	<!-- main-content -->
	<div class="main-content">
		<!-- contact-section -->
	<!--contact-->
	 <div class="w3layouts-contact-section">
	    <div class="container">
				<div class="agileits-contact-main">
					<div class="col-md-6 w3ls-map">
						<p class="loc">Our Location</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.620097308757!2d77.50547651486873!3d28.46086639858093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cc1d12d13dc75%3A0x42370e8da476d74a!2sSDS+NRI+Residency!5e0!3m2!1sen!2sin!4v1491982749506" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6 wthree-contact-in">
						<p class="sed-para"> Contact Information</p>
						<p class="para1">It is a long established near by NRI Residency, Omega II, NRI City, Omega II, Greater Noida.</p>
						<div class="address"> 
								<address>
								<strong><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></strong>
								  E-605,SDS NRI<br>
								  Pari Chowk,Greater Noida,UP,201303<br>								  
								  <abbr title="Phone"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></abbr>+91 9205729344
								  </address>
								<address>
							 <span class="glyphicon glyphicon-envelope" aria-hidden="true"><strong>&nbsp;Email</strong><br>
								  <a href="mailto:contactus@ccndep.com"><label>contactus@ccndep.com</label></a>
								  </br><span class="glyphicon glyphicon-globe" aria-hidden="true"><strong>&nbsp;Website</strong><br>
								  <a href="http://www.ccndep.com">www.ccndep.com</a>
							  
							  </address>
						  </div>
					</div>
						<div class="clearfix"> </div>
			      </div>
				 <div class="agileinfo-contact-bottom">
		        <h3 class="text-center find">Drop Your Message</h3>
				<p class="contactpara1 text-center">we would like to hear from you.</p>
				
							<form id="form" action="submit.php" method="post">
			   <div class="col-md-6 w3layouts-contact-grid">
								<p class="your-para">Your Name:</p>
								<input type="text" placeholder="" name="name" required="" />
								<p class="your-para">Your Mail:</p>
								<input type="text" placeholder="" name="email" required="" />
								<p class="your-para">Phone:</p>
								<input type="text" placeholder="" name="phone" required="" />
								<p class="your-para">Company Name:</p>
								<input type="text" placeholder="" name="company" />		
				</div>
				  <div class="col-md-6 w3layouts-contact-grid">
								<p class="your-para">Subject:</p>
								<input type="text" placeholder="" name="subject" />
								<p class="your-para">Your Message:</p>
								<textarea placeholder="" name="message" ></textarea>
								<div class="send">
									<input type="submit" name="query" value="Send" >
								</div>			
				</div>
				<div class="clearfix"> </div>
							</form>	
			</div>
	   </div>
     </div>
<!--//contact-->

<!-- contact-section  -->

	</div>
<!-- //main-content -->
	<!-- footer -->
	<?php include 'footer.php' ?>
	<!-- //footer -->
</body>
</html>
