<?php

	require "config.php";
	
/* 	$mtemp="ds@ga.cos";
	$query="SELECT fullname FROM suser WHERE email='$mtemp' ";	
	$result=mysqli_query($conn,$query) ;
	
	 while($row = mysqli_fetch_assoc($result)) {
        echo "Username:  " . $row["fullname"];
    } */
	
	session_start();
	
	if(!isset($_SESSION['is_login']))
	{
							if(isset($_POST['loginbt']))
							{
							
								$username=mysqli_real_escape_string($conn,trim($_POST['luid']));
								$upassword=mysqli_real_escape_string($conn,trim($_POST['lpass']));
							
								
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
											echo "Incorrect User-id OR Password";
										}
								}
							}
	}
	else
	{
		header("Location: dashboard.php");
	}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label>User-ID: </label>
			<input type="text" name="luid" > <br> <br>
			
			<label>Password: </label>
			<input type="password" name="lpass" > <br>
			<br>
			<input type="submit" name="loginbt" class="btn primary" >
			
</form>