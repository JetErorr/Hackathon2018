<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		.mn-main{
			width: 100%;
			height: 672px;
			background-image: url(images/back1.jpg);
			background-size: 100% 100%;
			text-align: center;
		}
		.mn-box{
			border-radius: 20px;			
			width: 30%;
			background-color: rgba(255,255,255,.6);
			margin-left: 37.5%;
			margin-top: 2%;
			text-align: center;
		}
		.mn-box form input{
			height: 40px;
			border-radius: 7px;
			border:none;
			margin-top: 20px;
		}
		.mn-box form button{
			height: 40px;
			width: 250px;
			border-radius: 7px;
			border:none;
			margin-top: 20px;
			background-color: #2b9ed8;
			color: white;
		}
		.mn-box form button:hover{
			background-color: #31bafd;
		}
		.mn-box table tr td{
			line-height:  15px;
			width: 150px;
		}
		.mn-box-text{
			box-shadow: 3px 3px 20px #31bafd;
		}
	</style>
</head>
<body>
	<div class="mn-main"> 		<!--Main-->
		<br clear="all">
		<div class="mn-box">
			<h3>Create Account</h3>
			<form>
				<label>
					Aadhhar Number
				</label>
				<input type="text" placeholder="Aadhhar Number" class="form-control mn-box-text"><br>

			 <hr type="dotted">
			 <font>Or</font>
				<label>
					First Name
				</label>
				<input type="text" placeholder="First Name" class="form-control mn-box-text"><br>	
				<label>
					Middle Name
				</label>
				<input type="text" placeholder="Middle Name" class="form-control mn-box-text"><br>
				<label>
					Last Name
				</label>
				<input type="text" placeholder="Last Name" class="form-control mn-box-text"><br>
				<label>
					Contact Number
				</label>
				<input type="text" placeholder="Contact Number" class="form-control mn-box-text"><br>
				<label>
					E-mail
				</label>
				<input type="E-mail" placeholder="E-mail" class="form-control mn-box-text"><br>
				<label>
					Password
				</label>
				<input type="Password" placeholder="Password" class="form-control mn-box-text"><br>
				<label>
					Comfirm Password
				</label>
				<input type="Password" placeholder="Re-enter your Password" class="form-control mn-box-text"><br>
			</form>
			<button class="btn btn-primary">
				submit form
			</button>
			<button class="btn btn-danger">
				Reset
			</button>
			<br>
			<br clear="all">
		</div>
	</div>
</body>
</html>