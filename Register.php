<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<title>Register</title>
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
			<a class="adminLogo" href="Account.html"><img src="Images/admin.png" alt="cart" width="87" height="87"></a>
		</div>
	</nav>
	
	<div class="bgImg"><img src="Images/9.jpg" alt="bgImage"></div>
	
	<section class="sec2">
	<form class="f2" action="RegistrationHandle.php" method="post">
	<div class="Register"><h2 align="center" class="re">Register</h2></div>
	<div>
		<label for="username" class="user1">Username</label>
		<br>
		<input type="text" class="user2" name="txtUsername" required>
	</div>
	<br>
	<div class="signup">
		<label for="email" class="user1">Email</label>
		<br>
		<input type="email" class="user2" name="txtEmail" required>
	</div>
	<br>
	<div class="pass">
		<label for="password" class="user1">Password</label>
		<br>
		<input type="password" class="user2" name="txtPassword" required>
	</div>
	<br>
	<div class="pass">
		<label for="password" class="user1">Confirm Password</label>
		<br>
		<input type="password" class="user2" name="txtConfirmPassword" required>
	</div>
	<br>
	<br>
	<div>
		<a href="#"><input type="submit" id="submit" class="submit" value="Sign up" name="btnSubmitReg"></a>
	</div>
	<br>
	<div>
		<p class="p2">Already have an account ?
		<br>
		<a href="Login.php" id="reg" class="reg">Login</a></p>
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
