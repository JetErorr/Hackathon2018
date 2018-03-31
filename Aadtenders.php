<?php  require "Dash_head.php";  ?>

<script>

	var element = document.getElementById("dash_compln");
    element.classList.add("sidenavact");

</script>
				  <div class="w3-rest" style="background: url(temp/bg5.jpg);background-size:100% 100%; max-height:900px;height:900px;border:0px solid red;padding:10px;">
				  
				  	<h1 style="color:white;">Add New Tenders</h1>
					<hr style="  border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));">
				
				<div style="width:100%;padding:0px 20px 0px 20px;">
						  <div style="width:100%;background-color:rgba(0,0,0,0.7);color:white;padding:10px; " align="center">
						  
										  <div style="" align="left">
										  	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
												
												<?php $mydate=getdate(date("U")); ?>
												<h4><span style="color:#b8c7ce;">Date: </span><span style="margin-left: 70px;"><?php echo "$mydate[mday]-$mydate[mon]-$mydate[year]" ?></span></h4>
												
												<h4><span style="color:#b8c7ce;">Expiry Date: </span><input type="date" name="" class="form-control" style="display: inline; width: 300px;margin-left: 10px;" placeholder="Enter Tenderd Expiry Date..."></h4>

												<h4><span style="color:#b8c7ce;">Tender Details: </span></h4>
												
												<textarea name="ccomplnt"  style="width:80%;height:200px;margin-left:10%;font-size:18px; background-color:rgba(255,255,255,0.9)" placeholder="Enter Tenders Details...." value="NULL"></textarea>
												<br>
												<h4><span style="color:#b8c7ce;">Attache Document: </span><input type="file" name="" class="form-control" style="display: inline; width: 300px;margin-left: 10px;" placeholder="Enter Tenderd Expiry Date..."></h4>
																<div style="margin:20px; 0px 20px 0px;margin-left:-50px;"  align="center">
																		<input type="submit" name="csubmit" class="btn btn-primary btn-md">
																		<input type="reset" style="margin-left:10px;" class="btn btn-danger btn-md" >
																</div>
											</form>
										</div>
						  </div>
				  </div>
				  
				  <?php
				  
				  	if( isset($_POST['csubmit'])  )
					{
													$complnt=$_POST['ccomplnt'];
													$cdate="$mydate[year]-$mydate[mon]-$mydate[mday]";
													$cid=$_SESSION['uid'];
													

													$sql = "INSERT INTO scomplaint (uid, 	complaint_date, complaint_detail)
													VALUES ('$cid', '$cdate',  '$complnt')";

													if (mysqli_query($conn, $sql)) {
													    echo '<script>alert("Your Complaint is Submitted Successfully...");</script>';
													} else {
													    echo '<script>alert("Your Complait is not Submitted'. mysqli_error($conn).'");</script>';
													}
					}
				  
				  ?>
				  		<!-- 	<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
							
							<label>Select Image: </label><br>
							<input type="file" name="pphoto" ><br><br>
							
							<input type="submit" name="uploadi" class="btn btn-primary" >
							</form> -->
					</div>
<?php  require "Dash_bottom.php" ?>