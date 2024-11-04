<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="HomeCss.css">
<link href="webfonts/BlackOpsOne_Regular/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image: url('Images/1.jpg')">
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
	
 	
	
 <section id="contact">
  <div class="con">
    <div class="contact-info">
      <h1>Contact Us</h1>
      <p>Feel free to reach out to us using the contact form or visit our store in person:</p>
      <p>No 142/5, Gamunu Street, Colombo 08</p>
    </div>
    
    <div class="contact-form">
      <h2>Send Us a Message</h2>
      <form id="contact-form" action="ContactHandle.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="txtName" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="txtEmail" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="txtMessage" required></textarea>
        </div>
		  <button type="submit" name="btnSubmitCon">Send</button>
      </form>
    </div>
  </div>
</section>
	
	<footer class="footer" style="margin-top: 850px;">
        <p align="center"> © Copyright Oripods.lk 2023. All rights reserved</p>
	    <p align="center"> Established in 2022</p>
	    <p align="center"> Privacy Policy | Terms of Service | Contact Us</p>
    </footer>
</body>
</html>
