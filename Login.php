<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="HomeCss.css">
<link href="webfonts/BlackOpsOne_Regular/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF">
	<nav class="navbar">
		<div class="navdiv">
			<a class="logo" href="Home.html" ><img src="Images/Logos/Logo4.1.png" alt="Shop Logo"></a>
			<ul>
				<li><a href="Home.html">Home</a></li>
				<li><a href="Catagories.html">Catagories</a></li>
				<li><a href="About.html">About</a></li>
				<li><a href="Contact.php">Contact</a></li>
				<button onClick="location.href='Login.php'">Login</button>
			</ul>
			<a class="cartLogo" href="Cart.html"><img src="Images/cart.png" alt="cart" width="58" height="60"></a>
			<a class="adminLogo" href="AdminLog.php"><img src="Images/admin.png" alt="cart" width="87" height="87"></a>
		</div>
	</nav>
	
	<div class="bgImg"><img src="Images/9.jpg" alt="bgImage"></div>
<section class="sec1">
	<form class="f1" action="LoginHandle.php" method="post">
	<div class="login"><h2 class="lo">Login</h2>
		<label for="email" class="log1">Email</label>
		<br>
		<input type="email" class="log2" name="txtEmail" required>
	</div>
	<br>
	<div class="pass">
		<label for="password" class="log1">Password</label>
		<br>
		<input type="password" class="log2" name="txtPassword" required>
	</div>
	<br>
	<div>
		<br>
		<label class="check">Remember me &nbsp;</label>
		<input type="checkbox" id="check" value="yes">
		<a href="#" id="forget" class="forget">Forgot Password</a>
	</div>
	<br>
	<div>
		<input type="submit" class="submit" id="submit" value="Login" name="btnSubmit">
	</div>
	<br>
	<div>
		<p class="p1">Don't have an account ?
		<br>
		<a href="Register.php" id="reg" class="reg">Register</a>
		</p>
	</div>
	</form>
</section>
	<footer class="footer">
        <p align="center"> © Copyright Oripods.lk 2023. All rights reserved</p>
	    <p align="center"> Established in 2022</p>
	    <p align="center"> Privacy Policy | Terms of Service | Contact Us</p>
    </footer>
</body>
</html>
