<?php  require "FDash_head.php";  ?>

<script>

	var element = document.getElementById("dash_bord");
    element.classList.add("sidenavact");
</script>
				  <div class="w3-rest" style="background: url(temp/bg4.png);background-size:100% 100%; max-height:900px;height:900px;border:0px solid red;padding:10px;">
				  
				  	<h1 style="color:white;">Profile</h1>
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
												<h3>Company name: Skill Power</h3>
												<h3>Owner name: Chetan Majithiya</h3>
												<h4>Courses</h4>
												<li>Electronic</li>
												<li>Computer</li>
												<li>Information technology</li>
												<h4>Employee details</h4>
												<div>
													<table border="1" style="border-color: white">
														<tr>
															<td> Sr no.</td>
															<td> Name</td>
															<td> Contect no.</td>
															<td> Email</td>
														</tr>
														<tr>
															<td> 1</td>
															<td> Ayaz</td>
															<td> 8468664648</td>
															<td> ayazarbi345@gmail.com</td>
														</tr>
															<td> 2</td>
															<td> Manish</td>
															<td> 8837938439</td>
															<td> maulikprajapati@gmail.com</td>
														</tr>
													</table>

												</div>
												<h4>Contect : 7847272730</h4>
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