<?php

	require "config.php";
	



	session_start();
	
	if(!isset($_SESSION['is_login']))
	{
							if(isset($_POST['loginbt']))
							{
							
								$username=mysqli_real_escape_string($conn,trim($_POST['luid']));
								$upassword=mysqli_real_escape_string($conn,trim($_POST['lpass']));
								$logtype=$_POST['logtyp'];
								
								if($logtype=="student")
								{
								
											$query="SELECT * FROM suser WHERE email='$username' AND password='$upassword'";
											$fire=mysqli_query($conn,$query);
											
											if($fire)
											{
													if(mysqli_num_rows($fire)==1)
													{
														
														$_SESSION['is_login'] = true;
														
														$sresult = mysqli_query($conn,"SELECT fname FROM suser WHERE email='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="fname";
														$_SESSION['user_name'] =$srow[$sfeild];
														
														$sresult = mysqli_query($conn,"SELECT mname FROM suser WHERE email='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="mname";
														$_SESSION['user_name'] =$_SESSION['user_name']." ".$srow[$sfeild];
														
														$sresult = mysqli_query($conn,"SELECT lname FROM suser WHERE email='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="lname";
														$_SESSION['user_name'] =$_SESSION['user_name']." ".$srow[$sfeild];
														
														
														
														$sresult = mysqli_query($conn,"SELECT uid FROM suser WHERE email='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="uid";
														$_SESSION['uid'] =$srow[$sfeild];
														
														$sresult = mysqli_query($conn,"SELECT user_profile FROM suser WHERE email='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="user_profile";
														$_SESSION['user-profile'] =$srow[$sfeild];
														
														$sresult = mysqli_query($conn,"SELECT email FROM suser WHERE email='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="email";
														$_SESSION['user-email'] =$srow[$sfeild];
														
														$sresult = mysqli_query($conn,"SELECT bdate FROM suser WHERE email='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="bdate";
														$_SESSION['user-bdate'] =$srow[$sfeild];
														
														
														header("Location: dashboard.php");
													}
													else
													{
														echo '<script>alert("Incorrect User-id OR Password");</script>';
													}
											}

								} /* End of Student*/
								else
								{
									if($logtype=="firm")
									{
										$query="SELECT * FROM firm_user WHERE Femail='$username' AND password='$upassword'";
											$fire=mysqli_query($conn,$query);
											
											if($fire)
											{
													if(mysqli_num_rows($fire)==1)
													{
														
														$_SESSION['is_login'] = true;
														
														$sresult = mysqli_query($conn,"SELECT Fname FROM firm_user WHERE Femail='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="Fname";
														$_SESSION['user_name'] =$srow[$sfeild];
														
														
														$sresult = mysqli_query($conn,"SELECT Fid FROM firm_user WHERE Femail='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="Fid";
														$_SESSION['uid'] =$srow[$sfeild];
														
														$sresult = mysqli_query($conn,"SELECT profile FROM firm_user WHERE Femail='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="profile";
														$_SESSION['user-profile'] =$srow[$sfeild];
														
														$sresult = mysqli_query($conn,"SELECT Femail FROM firm_user WHERE Femail='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="Femail";
														$_SESSION['user-email'] =$srow[$sfeild];
														
														$sresult = mysqli_query($conn,"SELECT start_date FROM firm_user WHERE Femail='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="start_date";
														$_SESSION['start_date'] =$srow[$sfeild];

														$sresult = mysqli_query($conn,"SELECT Faddress FROM firm_user WHERE Femail='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="Faddress";
														$_SESSION['Faddress'] =$srow[$sfeild];

														$sresult = mysqli_query($conn,"SELECT Fowner FROM firm_user WHERE Femail='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="Fowner";
														$_SESSION['Fowner'] =$srow[$sfeild];

														$sresult = mysqli_query($conn,"SELECT licence_num FROM firm_user WHERE Femail='$username' ");
														$srow = mysqli_fetch_array($sresult);
														$sfeild="licence_num";
														$_SESSION['licence'] =$srow[$sfeild];
														
														
														header("Location: Fdashboard.php");
													}
													else
													{
														echo '<script>alert("Incorrect User-id OR Password");</script>';
													}
											}
									} /* End of Firm*/
									else
									{
										echo '<script>alert("AAAAAAAAAAAAA");</script>';
									}
								}
							}
	}
	else
	{
		header("Location: index.php");
	}  

?>

<?php  require("HEADindex.php"); ?>

	<div style="width: 100%;min-height: 500px;background: url(TEMP/bg2.jpg);padding-top: 50px;" align="center">
			

			<br><br>



		<div class="loginbxdv" style="border: 0px solid red; width: 400px;min-height: 300px;background-color: rgba(255,255,255,0.9);padding: 10px;border-radius: 7px;" align="center">

			<div style="width:100px;height:100px; position: absolute;margin-top: -63px;border-radius: 50%; border:0px solid red;margin-left: 130px;">
				<img src="TEMP/img_avatar.png" draggable="false" style="width: 100%;height: 100%;border-radius: 50%;">
			</div>
				<br><br>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
				<div class="form-group" align="left">
					<label>User ID: </label>
					<input type="text" name="luid" class="form-control" style="width: 95%;" placeholder="Enter User ID">
				</div>

				<div class="form-group" align="left">
					<label>Password: </label>
					<input type="password" id="showpass" name="lpass" class="form-control" style="width: 95%;float: left;" placeholder="Enter Password">
					<i class="fa fa-eye" onclick="showpassel()" style="display: inline-block;float: left;line-height: 38px;margin-left: -30px;cursor: pointer;"></i>
					<br clear="all">
					<script>
						function showpassel() {

							    var x = document.getElementById("showpass");
							    if (x.type === "password") {
							    	
							        x.type = "text";
							    } else {
							    	
							        x.type = "password";
							    }
							}
					</script>
				</div>

				<div class="form-group" >
					<select name="logtyp" class="form-control" style="width: 50%;">
						<option value="student" selected>Student</option>
						<option value="firm">Firm</option>
						<option value="admin">Admin</option>
					</select>
				</div>

				<div class="form-group" >
					<input type="submit" name="loginbt" value="Login" class="form-control btn btn-primary">
				</div>

				<div class="form-group"> 
					<a href="#">Forgote Password</a><br>
					<span>Not Registered ? </span><a href="#">Create an Account</a>
				</div>

			</form>
			
		</div>


			<br><br><br>
	</div>



<?php  require("BOTTOMindex.php"); ?>

<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label>User-ID: </label>
			<input type="text" name="luid" > <br> <br>
			
			<label>Password: </label>
			<input type="password" name="lpass" > <br>
			<br>
			<input type="submit" name="loginbt" class="btn primary" >
			
</form> -->