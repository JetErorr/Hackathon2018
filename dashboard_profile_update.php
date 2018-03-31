<?php  require "Dash_head.php";  ?>

<script>

	var element = document.getElementById("dash_updainf");
    element.classList.add("sidenavact");

</script>
<script>
	document.getElementById('leftsideb').style.height="1200px";
	
</script>
				  <div class="w3-rest" style="background: url(temp/bg4.png);background-size:100% 100%; max-height:1200px;height:1200px;border:0px solid red;padding:10px;">
				  
				  	<h1 style="color:white;">Update Info</h1>
					<hr style="  border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));">
				
				<div style="width:100%;padding:0px 20px 0px 20px;">
						  <div style="width:100%;background-color:rgba(0,0,0,0.6);color:white;padding:10px;" align="center">
						  
										  <div class="daspupres" style="border:0px solid red; width:600px;" align="left" >
										  <h4 style="color:#b8c7ce;">Chance Profile Photo: </h4>
										  	 <div style="width:100px;height:100px;background-color:#f2f2f2;border-radius:50%;box-shadow:1px 3px 20px silver;margin:0px 0px 20px 0px;font-size:60px; color:red;padding:0px;">
							<?php
													if($_SESSION['user-profile']== NULL)
													{ 
														echo '<i class="fa fa-user" style="margin-left:30px;"></i>';
													}
													else
													{  
															echo '<img src="'.$_SESSION['user-profile'].'" style="width:100%;height:100%;border-radius:50%;margin:0px;">';
													}
								 ?> 
										</div>
										
																<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
													
																						
																						<input type="file" name="pphoto" >
																						
																						<input type="submit" name="uploadimg" value="Update Profile Photo" class="btn btn-primary" >
																	</form> 
							
							<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST">
										
										<h4 style="color:#b8c7ce;">First Name: <input type="text" class="form-control" style="background-color:rgba(255,255,255,0.9);width:90%;margin-top:15px;margin-left:20px;" name="fname" value="Chetan"></h4>
										<h4 style="color:#b8c7ce;">Mid Name: <input type="text" class="form-control" style="background-color:rgba(255,255,255,0.9);width:90%;margin-top:15px;margin-left:20px;" name="mname" value="R"></h4>
										<h4 style="color:#b8c7ce;">Last Name: <input type="text" class="form-control" style="background-color:rgba(255,255,255,0.9);width:90%;margin-top:15px;margin-left:20px;" name="lname" value="Majithiya"></h4>
										<h4 style="color:#b8c7ce;">State: <input type="text" class="form-control" style="background-color:rgba(255,255,255,0.9);width:90%;margin-top:15px;margin-left:20px;" name="ustate" value="Gujrat"></h4>
										<h4 style="color:#b8c7ce;">District: <input type="text" class="form-control" style="background-color:rgba(255,255,255,0.9);width:90%; margin-top:15px;margin-left:20px;" name="udistrict" value="Rajkot"></h4>
										<h4 style="color:#b8c7ce;">Address: <textarea style="background-color:rgba(255,255,255,0.9);width:90%;margin-top:15px;margin-left:20px;"  class="form-control" name="uaddrs">NULL</textarea></textarea></h4>
										<h4 style="color:#b8c7ce;">Mobile: <input type="number" class="form-control" style="background-color:rgba(255,255,255,0.9);width:90%;margin-top:15px;margin-left:20px;" name="umobi" value="7698290599"></h4>
										<h4 style="color:#b8c7ce;">Birth Date: <input type="date" class="form-control" style="background-color:rgba(255,255,255,0.9);width:90%;margin-top:15px;margin-left:20px;" name="udate" value="1998-04-28"></h4>
										<h4 align="center" style="margin-top:20px;"><input type="submit" class="btn btn-primary"  name="uploadinfon" value="Update Info"></h4>
							</form>
										
										<br clear="all">
						  </div>
				  </div>
				  
				  <?php
				  
			/*	  	if( isset($_POST['csubmit'])  )
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
					} */
				  
				  ?>
				  		<!-- 	<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
							
							<label>Select Image: </label><br>
							<input type="file" name="pphoto" ><br><br>
							
							<input type="submit" name="uploadi" class="btn btn-primary" >
							</form> -->
					</div>
					
					
					<?php
					
					
		if(isset($_POST['uploadinfon']))
		{
		
		
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];
			$ustate=$_POST['ustate'];
			$udistrict=$_POST['udistrict'];
			$uaddrs=$_POST['uaddrs'];
			$umobi=$_POST['umobi'];
			$udate=$_POST['udate'];
			
			
			$uidtmp=$_SESSION['uid'];
		$sql = "UPDATE suser SET fname='$fname', mname='$mname', lname='$lname', state='$ustate',district='$udistrict',address='$uaddrs', contactno='$umobi', bdate='$udate'  WHERE uid = '$uidtmp' ";

		if (mysqli_query($conn, $sql)) {
		    echo '<script>alert("User Information Update Successfully....");</script>';
		} else {
		    echo '<script>alert("User Information Fail...'. mysqli_error($conn).'");</script>' ;
		}
		
	 }
		
	/*		$pphto_name= $_FILES['pphoto']['name'];
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
			
	
		}   */
										
					?>
					
					
	<?php
	
		if(isset($_POST['uploadimg']))
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
																		header("Location: dashboard_profile_update.php");																
																}
																else
																{
																	echo "Image is Not Uploaded....";
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
			
	
		}
	
	?>
					
<?php  require "Dash_bottom.php" ?>