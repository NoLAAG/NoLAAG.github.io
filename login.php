<?php
$con = mysqli_connect("localhost","root","","website");

$username= $_POST['username'];
$password= $_POST['password'];

$error="";
if(isset($_POST['submit'])){
$req="Select * from Account where username = '$username' and password='$password'";
$res=mysqli_query($con,$req);
if(mysqli_num_rows($res) == 0){
	$error="Error Username/Password";
}else{
	$error=" ";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | My Website</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/img.svg">
		</div>
		<div class=login-container>
			<form>
				<img class="avatar" src= "img/avatar.svg">
				<h2>LOGIN</h2>
				<h3><?php echo "<span style='color:red'>$error</span>"; ?></h3>
				<div class="input-div one">
					<div class="i">
						<i class="fa fa-user " ></i>
					</div>
					<div>
						<h5>Username</h5>
						<input class="input" type="text" name="username" required>
					</div>
				</div>	
				<div class="input-div two">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div>
						<h5>Password</h5>
						<input class="input" type="password" name="password" required>
					</div>
				</div>		
					<a class="a" href="register.html">I don't have account yet</a>
					<a href="#">Forget Password?</a>
				<input type="submit" name="B1" class="btn" value="login">
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/server.js"></script>
</body>
</html>