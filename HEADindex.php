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
	<script>
		
		if('serviceWorker' in navigator)
		{
			try{
				navigator.serviceWorker.register('sw.js');

			}	catch (error)	{
				
			}
		}

	</script>
	<div id="maindiv">		<!-- Start of Main Division -->
		
		<header>
				<div style="border:0px solid red;width:200px;float:left;" align="center">
						<img src="images/skill-ind-logo.png" class="userimgel" style="margin:10px 0px 10px 10px ">
				</div>
				
				<div class="userlogdv" style="border:0px solid red;float:right;margin-top: 10px;" align="center">
					<div style="width:80px;height:80px;background-color:#f2f2f2;border-radius:50%;font-size:45px;box-shadow:2px 2px 5px #111">
							<?php
								
								
								$_SESSION['tempsd']="shasg";
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
									//session_destroy();
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
			
			<a href="index.php">Home</a>
			<a href="#" class="hdwhenres">Webinars</a>
			<a href="#" class="hdwhenres">Near by Job</a>
			<a href="#" class="hdwhenres">Skill War</a>
			<a href="#" class="hdwhenres">Traing Center</a>
			<a href="#" class="hdwhenres">Help</a>
			<a href="javascript:void(0)" onclick="openNav()" class="navrgwnrs">More <i class="fa fa-angle-double-right"></i></a>
			
			
			
		</nav>		<!-- End of Top Navigation -->
		
			<div id="mySidenav" class="sidenav"> <!-- Start of Right Navigation -->
  				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="index.php">Home</a>
				<a href="index.php">Languages</a>
				<a href="#">Webinars</a>
				<a href="#">Near by Center </a>
				<a href="gap_study.php">Gap Study</a>
				<a href="#">Skill War</a>
				<a href="#">Traing Center</a>
				<a href="#">Time Line</a>
		</div>	<!-- End of Right Navigation -->