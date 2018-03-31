<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/responsive.css">
 </head>
 <body>

 		<?php //$cdate="$mydate[year]-$mydate[mon]-$mydate[mday]"; ?>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
				<?php $mydate=getdate(date("U")); ?>
				<h4>Date: <?php echo "$mydate[mday]-$mydate[mon]-$mydate[year]"; ?></h4>
				<textarea name="notify" class="form-control"></textarea><br>

				<input type="submit" name="submitn" class="btn btn-primary">
				<input type="reset" class="btn btn-danger">

		</form>

</body>
</html>
<?php

	session_start();


	if( isset($_POST['submitn'])  )
	{
		$ndate="$mydate[year]-$mydate[mon]-$mydate[mday]";

		$noti=$_POST['notify'];
		$cid=$_SESSION['uid'];
													

		$sql = "INSERT INTO u_notification (uid, udate, noti) VALUES ('$cid', '$ndate','$noti')";
		if (mysqli_query($conn, $sql)) 
		{
			echo '<script>alert("Your Complaint is Submitted Successfully...");</script>';
		} 
		else
		{	
			echo '<script>alert("Your Complait is not Submitted'. mysqli_error($conn).'");</script>';											}
		}

?>