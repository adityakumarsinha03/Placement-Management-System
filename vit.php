<?php include('server.php') ?>
<!doctype html>
<html>
<head>
  
   <link rel="shortcut icon" type="image/png" href="head_logo.jpeg">
    

	<link rel="stylesheet" type="text/css" href="stl.css">
	<title>Home-T&P CUSAT Kochi</title>

</head>
<body>

<div class="page-container">

<div class="bloc bg-repeat bgc-ghost-white l-bloc" id="bloc-0">
<div class="container bloc-sm">
<div class="row">
<div class="col-sm-12">
                <div class="logo">
				<a href="vit.php"><img src="vit.jpg" alt="CUSAT Kochi"  class="head-logo" height="60"  align="left"/></a>
			    </div>
			<h4 class=" tc-black mg-sm">
					
					<a class="ltc-black" href="vit.php">Training &amp; Placement Cell</a>
				</h4>
				<h6 class=" mg-clear tc-1">
					 <a class="pull-left" href="https://cusat.ac.in" target="_blank"> School of Engineering, CUSAT</a><br>
				</h6>
			</div>
		</div>
	</div>
</div>

<div class="bloc b-divider l-bloc bgc-white" id="bloc-1">
	<div class="container">
		<div class="row">

			<div class="col-sm-6">
				<ul class="list-unstyled list-horizontal-layout right-align">
					<div class="navi">
						<a href="company.php" >Company</a>
					</div>
					<div class="navi">
						<a href="student.php" >Student</a>
					</div>	
					<div class="navi">
		
						<a href="admin.php" >Admin</a>
					</div>
				</ul>
			</div>
		</div>
	</div>
</div>
			

<div class="bloc bg-Home-Hero-3 bg-tr-edge bgc-united-nations-blue d-bloc" id="bloc-2">
	<div class="container">
		<div class="row">
			<div class="col-sm-123">
				<h3 class=" hero-h mg-clear tc-ghost-white">

				</h3>
			</div>
		</div>
	</div>
</div>

	
<div class="slides">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="home.jpg" style="width:100%" height="425">
  <div class="text">CUSAT</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="home0.jpg" style="width:100%" height="425">
  <div class="text">CUSAT</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="home2.jpg" style="width:100%" height="425">
  <div class="text">CUSAT</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="home11.jpg" style="width:100%" height="425">
  <div class="text">CUSAT</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="home14.jpg" style="width:100%" height="425">
  <div class="text">CUSAT</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="home17.jpg" style="width:100%" height="425">
  <div class="text">CUSAT</div>
</div>




</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 3 seconds
}
</script>
</div>
	
<div class="col-sm-4">
				<h4 class="mg-md bloc-mob-center-text  tc-dim-gray">
                                        
					<a href="https://cusat.ac.in/wifi.php" class="a-btn a-block bloc-mob-center-text">Internet and Wifi Facility</a>
					 
                                         <br>
                                         <br>
                                         <br>
					 
                                         <a href="http://library.cusat.ac.in/" class="a-btn a-block bloc-mob-center-text">Library Information Center</a>
                                        
                                         <br>
				</h4>
			</div>

<div class="bloc b-divider bgc-ghost-white l-bloc" id="bloc-63">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-sm-2">
				
			</div>
			
			<div class="col-sm-4">
                                        <br>
                                        <br>
				        
                                        <a class="a-btn a-block bloc-mob-center-text" href="https://www.cusat.ac.in/about.php">About Us</a>
                                        
                                        <br>
                                        <br>
                                        <br>
                                        <a class="a-btn a-block bloc-mob-center-text" href="https://cusat.ac.in/contact">Contact Us</a> <br>
				<!-- <h4 class="mg-md bloc-mob-center-text  tc-dim-gray">
									
				</h4> -->

			</div>
			<div class="col-sm-44">
				<h3 class="mg-md  text-right tc-dim-gray">
                                        <br>
					Training &amp; Placement Office
                                        <br>
                                        <br>
				</h3>
				<p class="text-right">
                                        <br>
										CUSAT Placement Cell <br> SOE (Old Block) <br>  CUSAT, Thrikkakara <br> Kochi, Kerala-682022
                                        <br>
                                        <br>
				</p>
				<p class="footer3">
					<strong>Phone</strong> <br><a href="CALL US NOW: +91(484)2577290">+91(484)2577290</a> <br>
				</p>
				<p class="footer4">
				<strong>Email</strong> <br><a href="https://cusat.ac.in">principal@cusat.ac.in</a>
				</p>
			</div>
		</div>
	</div>
</div>
</div>

    

</body>
<!-- <script type="text/javascript">
	$("button").click(function() {
	    $('html,body').animate({
	        scrollTop: $(".alumni").offset().top},
	        'slow');
	});
</script> -->
</html>