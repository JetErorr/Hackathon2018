<?php  require "ADash_head.php";  ?>

<script>

	var element = document.getElementById("dash_bord");
    element.classList.add("sidenavact");
</script>
				  <div class="w3-rest" style="background: url(temp/bg5.jpg);background-size:100% 100%; max-height:900px;height:900px;border:0px solid red;padding:10px;">
				  
				  	<h1 style="color:white;">Admin Dashboard</h1>
					<hr style="  border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));">
				
				<div style="width:100%;padding:0px 20px 0px 20px;">
						  <div style="width:100%;background-color:rgba(0,0,0,0.6); " align="center">
						  
										  <div class="respfnone" style="padding-top:15px;float:left;"> 
															  	 <div style="width:150px;height:150px;background-color:#f2f2f2;border-radius:50%;box-shadow:1px 3px 20px silver;font-size:60px; color:red;padding:0px;margin-left:15px;border:0px solid red;">
																<?php
																						if($_SESSION['user-profile']== NULL)
																						{ 
																							echo '<i class="fa fa-user" style="font-size:80px;margin-top:20px;"></i>';
																						}
																						else
																						{  
																								echo '<img src="'.$_SESSION['user-profile'].'" style="width:100%;height:100%;border-radius:50%;">';
																						}
																	 ?> 
																		
																    </div>
										  	</div>
											
											<div class="respfnone" style="float:left;color:white;margin-left:25px;border:0px solid red;text-align:left;">
												<h3>Admin Name: Dr. abc xyz</h3>
												<h3>Admin Id: 23</h3>
												<h3>Admin Email: drabcxyz@gmail.com</h3>
												<h3>Admin Contact No: 7698290599</h3>
												<h3>Last Login: 30-03-2018 16:40:38</h3>
												<!--<h5 style="color:dodgerblue;margin-left:10px;" >Computer Engineer</h5>
												<?php 
														 $dob=$_SESSION['user-bdate'];
    														$diff = (date('Y') - date('Y',strtotime($dob)));
												?>
												<h4><?php echo $_SESSION['user-email']; ?></h4>   -->
												
											</div>
											<br clear="all">
						  </div>
				  </div>
				  		<!-- 	<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
							
							<label>Select Image: </label><br>
							<input type="file" name="pphoto" ><br><br>
							
							<input type="submit" name="uploadi" class="btn btn-primary" >
							</form> -->
					</div>
<?php  require "Dash_bottom.php" ?>