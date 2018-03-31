<?php  require "Dash_head.php";  ?>

<script>

	var element = document.getElementById("dash_bord");
    element.classList.add("sidenavact");
</script>
				  <div class="w3-rest" style="background: url(temp/bg4.png);background-size:100% 100%; max-height:900px;height:900px;border:0px solid red;padding:10px;">
				  
				  	<h1 style="color:white;">Notifications</h1>
					<hr style="  border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));">
				
				<div style="width:100%;padding:0px 20px 0px 20px;">
						  <div style="width:100%;background-color:rgba(0,0,0,0.6); padding:10px;" align="center">


						  	 <?php
						  									
													  	$sql = "SELECT udate, noti FROM u_notificationHide";
														$result = mysqli_query($conn, $sql);

														if (mysqli_num_rows($result) > 0) 
														{
														    // output data of each row
														    while($row = mysqli_fetch_assoc($result)) {
														      //  echo "id: " . $row["docdetail"]. " - Name: " . $row["docpath"]. "<br>";
															  
															/*  echo  '<div class="eportfoliod">
																			      <a target="_blank" href="'.$row["docpath"].'">
																			        <img src="'.$row["docpath"].'"  style="width:100%;height:240px;">  
																			      </a>
																			      <div class="desc" style="color:#b8c7ce;">'.$row["docdetail"].'</div>
															  					  </div>'; */

																echo '<div class="dash_notif">
										 <div  style="width:100%;height:100px;margin-top: 10px;border:1px solid rgba(0,0,0,0.9);">
										 	<p style="color:white;">'.$row["noti"].'</p> udate
										 </div>
										 <div style="width: 100%;height:22px;color:white;background-color: rgba(0,0,0,0.9);">
										 	<p style="text-align: right;margin-right: 20px;">'.$row["udate"].'</p>
										 </div>
									</div>';
															  
														    }
														} else {
														   // echo "0 results";
														}
						  
						  ?>
						  				
						  			<div class="dash_notif">
										 <div  style="width:100%;height:100px;margin-top: 10px;border:1px solid rgba(0,0,0,0.9);">
										 	<p style="color:white;">Seeks to clarify the applicability of the notification No. 1/2018-Central Excise dated 02nd February, 2018, that the said notification shall not apply to the goods manufactured on or before the 1st February, 2018 and cleared on or after the 2nd February, 2018</p>
										 </div>
										 <div style="width: 100%;height:22px;color:white;background-color: rgba(0,0,0,0.9);">
										 	<p style="text-align: right;margin-right: 20px;">26-03-2018</p>
										 </div>
									</div>

									<div class="dash_notif">
										 <div  style="width:100%;height:100px;margin-top: 10px;border:1px solid rgba(0,0,0,0.9);">
										 	<p style="color:white;">Seeks to clarify the applicability of the notification No. 1/2018-Central Excise dated 02nd February, 2018, that the said notification shall not apply to the goods manufactured on or before the 1st February, 2018 and cleared on or after the 2nd February, 2018</p>
										 </div>
										 <div style="width: 100%;height:22px;color:white;background-color: rgba(0,0,0,0.9);">
										 	<p style="text-align: right;margin-right: 20px;">26-03-2018</p>
										 </div>
									</div>

									<div class="dash_notif">
										 <div  style="width:100%;height:100px;margin-top: 10px;border:1px solid rgba(0,0,0,0.9);">
										 	<p style="color:white;">Seeks to clarify the applicability of the notification No. 1/2018-Central Excise dated 02nd February, 2018, that the said notification shall not apply to the goods manufactured on or before the 1st February, 2018 and cleared on or after the 2nd February, 2018</p>
										 </div>
										 <div style="width: 100%;height:22px;color:white;background-color: rgba(0,0,0,0.9);">
										 	<p style="text-align: right;margin-right: 20px;">26-03-2018</p>
										 </div>
									</div>

									<div class="dash_notif">
										 <div  style="width:100%;height:100px;margin-top: 10px;border:1px solid rgba(0,0,0,0.9);">
										 	<p style="color:white;">Seeks to clarify the applicability of the notification No. 1/2018-Central Excise dated 02nd February, 2018, that the said notification shall not apply to the goods manufactured on or before the 1st February, 2018 and cleared on or after the 2nd February, 2018</p>
										 </div>
										 <div style="width: 100%;height:22px;color:white;background-color: rgba(0,0,0,0.9);">
										 	<p style="text-align: right;margin-right: 20px;">26-03-2018</p>
										 </div>
									</div>

									

									

										
						  </div>
				  </div>
				  		<!-- 	<form action="<?php  $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
							
							<label>Select Image: </label><br>
							<input type="file" name="pphoto" ><br><br>
							
							<input type="submit" name="uploadi" class="btn btn-primary" >
							</form> -->
					</div>
<?php  require "Dash_bottom.php" ?>