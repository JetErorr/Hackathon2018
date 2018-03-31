<!DOCTYPE html>
<html>
<head>
	<title>SignIn</title>
	<link rel="stylesheet" type="text/css" href="libs/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.mn-main{
			height: 672px;
			width: 100%;
			background-image: url(images/back1.jpg);
			background-size: 100% 100%;
			text-align: center;
		}
		.mn-box{
			border-radius: 20px;			
			width: 25%;
			background-color: rgba(255,255,255,.6);
			margin-left: 37.5%;
			margin-top: 5%;
			text-align: center;
		}
		.mn-box form input{
			height: 40px;
			width: 75%;
			border-radius: 7px;
			border:none;
			margin-top: 20px;
		}
		.mn-box form button{
			height: 40px;
			width: 75%;
			border-radius: 7px;
			border:none;
			margin-top: 20px;
			background-color: #2b9ed8;
			color: white;
		}
		.mn-box form button:hover{
			background-color: #31bafd;
		}
	</style>
</head>
<body>
	<div class="mn-main">		<!--main-->
		<br clear="all">
		<div class="mn-box">
			<img src="images/aa.png" style="height: 70px;width: 70px;margin-top: -30px;">
			<h3>Sign In</h3>
			<form>
				<input type="text" name="username" class="formcontrol" placeholder="Username"><br>
				<input type="password" name="password" class="formcontrol" placeholder="Password"><br>
				<button>Sign In</button>
			</form>
			<a href="forget.html"  style="font-size: 12px;color: black;">Forgot Password?</a>
			<br>
			<br clear="all">
		</div>
		<hr style="text-align: center;color: white;">
		<a href="registration" style="font-size: 12px;color: black;">Haven't account Register Here</a>
	</div>
</body>
</html>