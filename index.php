<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <title>Skill India</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="icon" href="./../favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="libs/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="libs/vendorstyle.css" />
<link rel="stylesheet" type="text/css" href="libs/fontawesome-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css" />
<link rel="manifest" href="manifest.json">
<style>
#navbar{ z-index: 100; }
.sidenav{z-index: 101;}

</style>
</head>
<body>
	<div id="maindiv">		<!-- Start of Main Division -->
		
		<header>
				<div style="border:0px solid red;width:200px;float:left;" align="center">
						<img src="images/skill-ind-logo.png" class="userimgel" style="margin:10px 0px 10px 10px ">
				</div>
				
				<div class="userlogdv" style="border:0px solid red;float:right;margin-top: 10px;" align="center">
					<div style="width:80px;height:80px;background-color:#f2f2f2;border-radius:50%;font-size:45px;box-shadow:2px 2px 5px #111">
							<?php
								session_start();

								if(isset($_SESSION['user-profile']))
								{
													if($_SESSION['user-profile']== NULL)
													{ 
														echo '<i class="fa fa-user"></i>';
													}
													else
													{  
															echo '<img src="'.$_SESSION['user-profile'].'" style="width:100%;height:100%;border-radius:50%;margin:0px;">';
													}
								}
								else
								{
										echo '<i class="fa fa-user"></i>';
								}
								 ?> 
					</div>
					
					<?php 
					
					$xvr=0;
				
	
				if(!isset($_SESSION['is_login']))
				{
					$xvr=0;
				}
				else
				{
					$xvr=1;
				}
		
					
					if($xvr==0)
					{  ?>
					<a href="loging.php">Login</a><br>
					<a href="siregistration.php">Create Account</a>
					
					<?php }
					
					else
					{
					?>
						<a href="dashboard.php"><?php echo $_SESSION['user_name'];;  ?></a><br>
						<a href="logout.php">Log Out</a>
					 <?php } ?>
					 
					 
					 
				</div>
				<br clear="all">
				
		</header>
		
		<nav id="navbar"> 		<!-- Start of Top Navigation -->
			
			<a href="#">Home</a>
			<a href="#" class="hdwhenres">Webinars</a>
			<a href="#" class="hdwhenres">Near by Job</a>
			<a href="#" class="hdwhenres">Skill War</a>
			<a href="#" class="hdwhenres">Traing Center</a>
			<a href="#" class="hdwhenres">Help</a>
			<a href="javascript:void(0)" onclick="openNav()" class="navrgwnrs">More <i class="fa fa-angle-double-right"></i></a>
			
			
			
		</nav>		<!-- End of Top Navigation -->
		
			<div id="mySidenav" class="sidenav"> <!-- Start of Right Navigation -->
  				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="#">Home</a>
				<a href="#">Webinars</a>
				<a href="#">Near by Center </a>
				<a href="gap_study.php">Gap Study</a>
				<a href="#">Skill War</a>
				<a href="#">Traing Center</a>
				<a href="#">Time Line</a>
		</div>	<!-- End of Right Navigation -->
		

		<div style="">
			<div class="myslide">	
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
          <img src="images/slideimage/slider-1.jpg" style="width:100%">
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 4</div>
          <img src="images/slideimage/slider-6.jpg" style="width:100%">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
          <img src="images/slideimage/slider-21.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>
		
		<div class="mySlides fade">
          <div class="numbertext">4 / 4</div>
          <img src="images/slideimage/slider-16.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>

      </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
		  <span class="dot"></span> 
        </div>
	</div>
		</div>

		<div style="height:400px;">		<!-- Announcment -->
			<div class="ansthd" style="background-image: url(TEMP/bg2.jpg);">	<!--Scroll Updates -->
				<h3 style="color: white; text-align: center;">NOTICES & UPDATES</h3>
				<marquee direction="up" height="350px" onMouseOver="this.stop()" onMouseOut="this.start()">

					<a href="#" class="anoncentdv">
					<div class="contont">
						Validity of target allocation under Short Term Training, CSCM component of PMKVY 2016-2020.
					</div>
					<div class="dateshow">12-03-2018</div>
					</a><br><br>

					<a href="#" class="anoncentdv">
					<div class="contont">
						Notice on PMKVY (2016 – 2020) centres which have completed the suspension period on 07.02.2018.
					</div>
					<div class="dateshow">28-02-2018</div>
					</a><br><br>

					<a href="#" class="anoncentdv">
					<div class="contont">
						PMKVY (2015-16)- Monetary Reward Disbursement Details (List 1-1009).
					</div>
					<div class="dateshow">08-02-2018</div>
					</a><br><br>

					<a href="#" class="anoncentdv">
					<div class="contont">
						PMKVY (2015-16)- Monetary Reward Disbursement Details (List 1010-2265).
					</div>
					<div class="dateshow">08-02-2018</div>
					</a><br><br>

					<a href="#" class="anoncentdv">
					<div class="contont">
						Hon'ble President Shri Pranab Mukherjee inaugurated Driver Training Institutes and Dhaula Middle School at Dhaula (Sohna), Haryana on 2nd June 2017.
					</div>
					<div class="dateshow">02-06-2017</div>
					</a><br><br>

					<a href="#" class="anoncentdv">
					<div class="contont">
						Skill India Mission 2nd Anniversary Celebrations on the occasion of World Youth Skills Day at Vigyan Bhawan, New Delhi.
					</div>
					<div class="dateshow">15-06-2017</div>
					</a><br><br>


					<a href="#" class="anoncentdv">
					<div class="contont">
						Inauguration of Regional Vocational Training Institute (RVTI) by Hon'ble Vice President of India at Hyderabad on 16th September 2017 at 10:00 AM.
					</div>
					<div class="dateshow">16-09-2017</div>
					</a><br><br>

				</marquee>
				
		</div>
	</div>

		<br>

		<div class="opsnhm" style="width: 100%;padding-bottom:50px;padding-top:20px;background-image: url(TEMP/bg2.jpg);background-size: 100% 100%;" align="center">	<!--Options For All Users-->
			<a href="#" >
				<div class="mn-hove">
					<img src="images/webinar.jpg">
					<h3>Webinars</h3>
					<p>total : 15</p>
					<p>Next : 15th March</p>
				</div>
			</a>

			<a href="#">
				<div class="mn-hove">
					<img src="images/job.png" >
					<h3>Job Near Me</h3>
					<p>Search Job By Location</p>
				</div>
			</a>

			<a href="#">
				<div class="mn-hove" >
					<img src="images/training.jpg" >
					<h3>Find Training Center</h3>
					<p>Find Traning Provider Near Your Location</p>
				</div>
			</a>

			<a href="#">
				<div class="mn-hove">
					<img src="images/tender.png" >
					<h3>Tenders</h3>
					<p>Show All Tenders Given By TP</p>
				</div>
			</a>

			<a href="#">
				<div class="mn-hove">
					<img src="images/enroll.jpg" >
					<h3>Enroll TP Into PMKVY</h3>
					<p>Enroll Your Traing Center To PMKVY</p>
				</div>
			</a>

			<a href="#">
				<div class="mn-hove">
					<img src="images/exam.png" >
					<h3>Skill War</h3>
					<p>World Skill Competition</p>
				</div>
			</a>

			<br clear="all">
		</div>
			<br><br><br><br><br><br><br><br><br><br><br>
		<footer>		<!-- Start of The Page Footer -->
		
			<div class="footer-content">
				<div id="google_translate_element"></div>
			</div>
		
			<div class="bottomimg" align="center">
				
				<a href="http://www.digitalindia.gov.in" target="_blank">
					<img src="images/digital-india-logo.png" title="Government of India" alt="Government of India">
				</a>
				
				<a href="https://mygov.in/" target="_blank">
                    <img src="images/pmkvy.jpg" title="My Government" alt="My Government">
                </a>
				
				<a href="https://mygov.in/" target="_blank">
                    <img src="images/mygov.png" title="My Government" alt="My Government">
                </a>
			
				<a href="http://india.gov.in/" target="_blank">
					<img src="images/govindia.png" title="Government of India" alt="Government of India">
				</a>
				
			</div>
			
		</footer>		<!-- Endof The Page Footer -->
		
	</div>		<!-- End of Main Division -->
	<script>
		
		if('serviceWorker' in navigator)
		{
			try{
				navigator.serviceWorker.register('./sw.js');

			}	catch (error)	{
				
			}
		}

	</script>
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
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
var dv=document.getElementById("maindiv");

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    dv.style.marginTop="42px";
  } else {
    navbar.classList.remove("sticky");
    dv.style.marginTop="0px";
  }
}

</script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>