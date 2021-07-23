<?php
$con = mysqli_connect("mysql-waeyahiaoui.alwaysdata.net","239893_admin","Waelezio20!","waeyahiaoui_web");

$name= $_POST['T1'];
$username= $_POST['T2'];
$email= $_POST['T3'];
$password= $_POST['T4'];

	$req="insert into Account('name','username','email','password') Values('$name','$username','$email','$password')";
	mysqli_query($con,$req);
	echo"Done!";


?>