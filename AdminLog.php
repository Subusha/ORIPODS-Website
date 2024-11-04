<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial scale=1.0">
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="HomeCss.css">
<link href="webfonts/BlackOpsOne_Regular/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF">
	<nav class="navbar">
		<div class="navdiv">
			<a class="logo" href="Home.html" ><img src="Images/Logos/Logo4.1.png" alt="Shop Logo"></a>
		</div>
	</nav>
<div class="bgImg"><img src="Images/9.jpg" alt="bgImage"></div>
<section class="sec1" style="margin-top: -13cm;">
	<form class="f1" action="AdminLogHandle.php" name="myForm" method="post" style="height: 380px;">
	<div class="login"><h2 class="lo">Admin Login</h2>
		<label for="email" class="log1">Username</label>
		<br>
		<input type="text" class="log2" name="txtUsername" required>
	</div>
	<br>
	<div class="pass">
		<label for="password" class="log1">Password</label>
		<br>
		<input type="password" class="log2" name="txtPassword" required>
	</div>
	<br>
	<div>
		<input type="submit" class="submit" id="submit" value="Login" name="btnSubmit">
	</div>
	</form>
</section>
	<footer class="footer" style="margin-top: 3cm;">
        <p align="center"> © Copyright Oripods.lk 2023. All rights reserved</p>
	    <p align="center"> Established in 2022</p>
	    <p align="center"> Privacy Policy | Terms of Service | Contact Us</p>
    </footer>
</body>
</html>
