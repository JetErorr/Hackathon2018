<?php require "config.php"; ?>

<?php

	
		session_start();
	
		if($_SESSION['is_login'])
		{
			// keep loging
		}
		else
		{
			//
			header ("Location: siloging.php");
		}	
		
   /*		if(isset($_POST['uploadi']))
		{
			$pphto_name= $_FILES['pphoto']['name'];
			$pphto_name = preg_replace("/\s+/","_",$pphto_name);
			$pphto_tmp=$_FILES['pphoto']['tmp_name'];
			$pphto_size=$_FILES['pphoto']['size'];
			$pphto_type=$_FILES['pphoto']['type'];
			$pphto_extn=pathinfo($pphto_name,PATHINFO_EXTENSION);
			
			$pphto_name=pathinfo($pphto_name,PATHINFO_FILENAME);
			
			$pphto_name= $_SESSION['uid']."-".$pphto_name."_".date("mjYHis").".".$pphto_extn;
			
		
			if(!empty($pphto_name))
			{
						if($pphto_size <= 2000000)
						{
								if($pphto_extn == "jpg" || $pphto_extn == "jpeg" || $pphto_extn == "png")
								{
									// every thing is good
															$final_file="user_images/".$pphto_name;
															$upload_img=move_uploaded_file($pphto_tmp,$final_file);
															if($upload_img)
															{
																$ipuid=$_SESSION['uid'];
																$iquery="UPDATE suser SET user_profile='$final_file' WHERE uid = '$ipuid'";
																$ifire=mysqli_query($conn,$iquery);
																if($ifire)
																{
																	$_SESSION['user-profile']=$final_file;
																	echo '<script>alert("Hali Gayu....");</script>';
																}
																else
																{
																	echo "a jo....";
																}
															}
															 else
															 {
															 	echo '<script>alert("Image is Not Uploaded....");</script>';
															 } 
								}
								else
								{
									echo  '<script>alert("Only JPG, JPEG and PNG File Allowed....");</script>';
								}
						}
						else
						{
							echo  '<script>alert("Image Size is To Large....");</script>';
						}
			}
			else
			{
				echo '<script>alert("Please Select Image....");</script>';
			}
			
		/**/ /*
		}

*/ ?>    

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/responsive.css">
  
<style>
  .sidenav a{
   
    text-decoration:none;
    display:block;
    padding: 12px 5px 12px 15px;
    color:#b8c7ce;
    border-left:3px solid #222d32;
    transition:all 0.4s;
    text-align:left;
  }
  .sidenav a i{
   font-size:18px; 
  }
  .sidenav a:hover{
    background: #1e282c;
    color:#fff;
    border-left-color: red;
  }
  .sidenavact{
	background: #1e282c;
    color:#fff;
    border-left-color: red !important;
	
  }
  .dashnav {
  	width:100%;
	height:50px;
	background-color: #555299;
	position:fixed;
	z-index:5;
  }
  .dashnav a i{font-size:23px;}
  .dashnav a{
	 color:white;
	 text-decoration:none;
	 line-height:50px;
	 display:block;
	 float:left;
	 margin-left:10px;
	 padding:0px 10px 0px 10px;
	 transition:all 0.4s;
  }
  .dashnav a:hover{
	background-color:#222d32;
  }
  
  .resbar{ /*menu bar*/
  	display:none !important;
  }
@media (max-width:450px)
{
	.nonewhenmb
	{
		display:none !important;
	}
}
#leftsideb{
	width:250px;
	overflow-x: hidden;
	transition: 0.5s;
}
@media (max-width:700px)
{
	
	#leftsideb{
		position:absolute !important;
		width:0;
		height: 100%;
  		 width: 0;
	}
	.resbar{
  		display:block !important;
  }
}

.container {
    display: inline-block;
    cursor: pointer;
	border:0px solid red;
	margin-top:8px;
}

.bar1, .bar2, .bar3 {
    width: 31px;
    height: 3px;
    background-color: white;
    margin: 6px 0;
    transition: 0.4s;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
}
.hovrn{padding:0px;height:50px;line-height:0px !important;margin-left:0px !important;}
.hovrn:hover{
 background-color: #555299 !important;
}
/************** Start Dashboard************/
@media (max-width:570px)
{
	.respfnone{
		float:none !important;
	}
}
/**************End of Dashboard************/

/*update info*/
@media (max-width:960px) 
{
	.daspupres
	{
		width:100% !important;
	}
}
/*Start E-portfolio*/
.eportfoliod {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 230px;
	
    transition:all 0.4s;
}

.eportfoliod:hover {
    
    box-shadow:1px 1px 10px #f2f2f2;
}

.eportfoliod img {
    width: 100%;
}

.eportfoliod .desc {
    padding: 15px;
    text-align: center;
}
/* The Modal (background) */
.uploadmodal .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.uploadmodal .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
 
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.uploadmodal .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.uploadmodal .close:hover,
.uploadmodal .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.uploadmodal .modal-header {
    padding: 2px 16px;
      background-color:dodgerblue;
    color: white;
}

.uploadmodal .modal-body {padding: 2px 16px;}

.uploadmodal .modal-footer {
    padding: 2px 16px;
        background-color:dodgerblue;
    color: white;
}
/*End of E-portfolio*/

/* Start of Notification */
.dash_notif{
	background-color: #222d32;
	box-shadow: 1px 1px 10px #f2f2f2;
	transition: all 0.4s;
}
.dash_notif:hover{
	box-shadow: 1px 1px 5px #f2f2f2;
}
/* End of Notification */
  </style>
</head>
<body >
	<div style="border:0px solid blue;">
  <div class="dashnav" >
      
	<!--   <a href="javascript:void(0);" onclick="calltha();" class="resbar"> <i class="fa fa-bars"></i> </a> -->
			<a href="javascript:void(0);" class="hovrn resbar" onclick="myFunction(this);calltha();" >
			<div class="container ">
					  <div class="bar1"></div>
					  <div class="bar2"></div>
					  <div class="bar3"></div>
				</div>
				</a>	
	
	  <a href="index.php"><i class="fa fa-home"></i> HOME</a>
	  <a href="#"><i class="fa fa-group"></i> About Us</a>
	  <a href="logout.php" style="float:right;" class="nonewhenmb"><i class="fa fa-sign-out"></i> Log Out</a>
	  <br clear="all">
  </div>
  
  <div style="width:100%;height:50px;"></div> <!-- User Leave Margin for nav is position fixed-->
  
  <script>
  	function myFunction(x) {
    x.classList.toggle("change");
}

  	var sdb=0;
  	function calltha()
	{
		if(sdb==0)
		{
			document.getElementById("leftsideb").style.width="250px";
			sdb=1;
		}
		else
		{
			document.getElementById("leftsideb").style.width="0px";
			sdb=0;
		}	
	}
  
  </script>
  
  <div class="w3-row" style="border:0px solid blue;">
  
				  <div id="leftsideb" class="sidenav w3-col" style="border:0px solid black;height:900px;background-color: #222d32;clear:all;" align="center">
				    
							    <div style="width:100px;height:100px;background-color:#f2f2f2;border-radius:50%;box-shadow:1px 3px 20px silver;margin:20px 0px 20px 0px;font-size:60px; color:red;padding:0px;">
							<?php
													if($_SESSION['user-profile']== NULL)
													{ 
														echo '<i class="fa fa-user"></i>';
													}
													else
													{  
															echo '<img src="'.$_SESSION['user-profile'].'" style="width:100%;height:100%;border-radius:50%;margin:0px;">';
													}
								 ?> 
									
							    </div>
								<p style="color:white;"><?php echo $_SESSION['user_name']; ?></p>
							    
							    <a href="Adashboard.php" id="dash_bord" class=" "><i class="fa fa-dashboard"></i> Dashboard</a>
							    <a href="#" id="addnewtenders" class=" "><i class="fa fa-user-plus"></i> Add New Admin</a>
							    <a href="#" id="dash_student" class=" "><i class="fa fa-plus-circle"></i> Add New Tenders</a>
							    <a href="Atendars_proposal.php" id="teder-propsal" class=" "><i class="fa fa-file-text"></i> Tenders & Proposals </a>
							    <a href="#" id="dash_updainf" class=" "><i class="fa fa-university"></i> Training Centers </a>
							    <a href="#" id="dash_helpd" class=" "><i class="fa fa-bell"></i> Notification</a>
							    
							    <a href="#" id="dash_updainf" class=" "><i class="fa fa-exclamation-triangle"></i> Firm Complaints </a>
							    <a href="#" id="dash_updainf" class=" "><i class="fa fa-exclamation-triangle"></i> Students Complaints </a>
							    <a href="#" id="dash_updainf" class=" "><i class="fa fa-edit"></i> Edid Admins </a>
							    <a href="#" id="dash_helpd" class=" "><i class="fa fa-question"></i> Tech Help</a>
							    <a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a>
				    <!-- sidenavact -->
				  </div>
  
				  