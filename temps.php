<?php

	require "config.php";
	
											$username="chetanmajithiya@gmial.com";
											$sresult = mysqli_query($conn,"SELECT fullname FROM suser WHERE email='$username' ");
											$srow = mysqli_fetch_array($sresult);
											$sfeild="fullname";
											$_SESSION['user_name'] =$srow[$sfeild];
											echo $_SESSION['user_name'];

?>