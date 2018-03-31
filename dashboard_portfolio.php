<?php  require "Dash_head.php";  ?>

<script>

	var element = document.getElementById("dash_mskill");
    element.classList.add("sidenavact");
</script>
				  <div class="w3-rest" style="background: url(temp/bg4.png);background-size:100% 100%; max-height:900px;height:900px;border:0px solid red;padding:10px;">
				  
				  	<h1 style="color:white;">E-Portfolio</h1>
					<hr style="  border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));">
				
				<div style="width:100%;padding:0px 15px 0px 20px;">
				
				
						  <div style="width:100%;background-color:rgba(0,0,0,0.6); padding:10px;" align="center">
						  <h2 style="color:#b8c7ce;" align="left">Certificates</h2>
						  
						  <?php
						  								$ipuid=$_SESSION['uid'];
													  	$sql = "SELECT docdetail, docpath FROM user_document WHERE uid ='$ipuid' ";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) {
														    // output data of each row
														    while($row = mysqli_fetch_assoc($result)) {
														      //  echo "id: " . $row["docdetail"]. " - Name: " . $row["docpath"]. "<br>";
															  
															  echo  '	<div class="eportfoliod">
																			      <a target="_blank" href="'.$row["docpath"].'">
																			        <img src="'.$row["docpath"].'"  style="width:100%;height:240px;">  
																			      </a>
																			      <div class="desc" style="color:#b8c7ce;">'.$row["docdetail"].'</div>
															  					  </div>';
															  
														    }
														} else {
														    echo "0 results";
														}
						  
						  ?>
														<div id="myBtn" style="float:left;width:100px; height:100px;background-color:dodgerblue; border-radius:50%;margin-top:100px;margin-left:50px;cursor: pointer;">
														
														<p style="line-height:100px; color:white;font-size:45px;"><i class="	fa fa-plus"></i></p>
														
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
					
								  <!-- The Modal -->
																							<div class="uploadmodal">
																							      <div id="myModal" class="modal">

																							        <!-- Modal content -->
																							        <div class="modal-content">
																							          <div class="modal-header">
																							            
																							            <h2  style="float:left;">Upload New Certificate</h2>
																										<span class="closemod close">&times;</span>
																							          </div>
																							          <div class="modal-body" style="min-height:150px">

																							            <form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">

																							              <br>
																							             		 <input type="file" name="pphoto"> <br> <br>
																												 <input type="text" name="ddoc" placeholder="Enter Detail About The Certificate" class="form-control"> <br><br>
																							            			  <input type="submit" name="uploadimgct" class="btn btn-primary	" value="Upload">
																							            </form>
							<?php
							
	if(isset($_POST['uploadimgct']))
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
															$final_file="user_documents/".$pphto_name;
															$upload_img=move_uploaded_file($pphto_tmp,$final_file);
															if($upload_img)
															{
																$docdtl=$_POST['ddoc'];
																$ipuid=$_SESSION['uid'];
																$docpath=$final_file;
																
																$iquery="INSERT INTO user_document (uid,docdetail	,docpath)	VALUES ('$ipuid','$docdtl','$docpath')";
																$ifire=mysqli_query($conn,$iquery);
																if($ifire)
																{
																
																header("Refresh:0");
																
																/*	echo '<script>alert("Image is Not Uploaded....");</script>';
																		header("Location: index.php"); */
																/*	$_SESSION['user-profile']=$final_file;
																		header("Location: dashboard_profile_update.php");			*/													
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
																							          </div>
																							          <div class="modal-footer">
																							            <h3 >E-Portfolio</h3>
																							          </div>
																							        </div>

																							      </div>
																							</div>

																							<script>
																										// Get the modal
																										var modal = document.getElementById('myModal');

																										// Get the button that opens the modal
																										var btn = document.getElementById("myBtn");

																										// Get the <span> element that closes the modal
																										var span = document.getElementsByClassName("closemod")[0];

																										// When the user clicks the button, open the modal 
																										btn.onclick = function() {
																										    modal.style.display = "block";
																										}

																										// When the user clicks on <span> (x), close the modal
																										span.onclick = function() {
																										    modal.style.display = "none";
																										}

																										// When the user clicks anywhere outside of the modal, close it
																										window.onclick = function(event) {
																										    if (event.target == modal) {
																										        modal.style.display = "none";
																										    }
																										}
																							</script>
<?php  require "Dash_bottom.php" ?>