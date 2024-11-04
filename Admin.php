<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header('Location:AdminLog.php');
}
?>
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
			<ul>
				<li><a href="Admin.php"> Admin Home</a></li>
				<li><a href="Catagories.html">Catagories</a></li>
				<li><a href="AddProduct.php">Add products</a></li>
				<li><a href="ViewProduct.php">View Product</a></li>
				<button onClick="location.href='Login.php'" style="margin-left: -2.8cm">Login</button>
			</ul>
			<a class="cartLogo" href="Cart.html"><img src="Images/cart.png" alt="cart" width="58" height="60"></a>
			<a class="adminLogo" href="AdminLog.php"><img src="Images/admin.png" alt="cart" width="87" height="87"></a>
		</div>
	</nav>
 <div class="bgImg"><img src="Images/3.jpg" alt="Background Image">
    <h1 class="topic2" style="margin-top: -18cm;">Admin Page</h1>

    <section id="categories" style="max-width: 1200px;">
      <div class="category-card">
        <a href="AddProduct.php">
          <img src="Images/Admin/a.png" alt="Category 0">
          <div class="category-caption">
            <h3>Add Products</h3>
          </div>
        </a>
      </div>
      <div class="category-card">
        <a href="NewProduct.php">
          <img src="Images/Admin/b.png" alt="Category 1">
          <div class="category-caption">
            <h3>Newly Added Products</h3>
          </div>
        </a>
      </div>
      <div class="category-card">
        <a href="ViewProduct.php">
          <img src="Images/Admin/c.png" alt="Category 2">
          <div class="category-caption">
            <h3>View Products</h3>
          </div>
        </a>
      </div>
  </section>
  </div>

	<footer class="footer" style="margin-top: 3.7cm">
        <p align="center"> © Copyright Oripods.lk 2023. All rights reserved</p>
	    <p align="center"> Established in 2022</p>
	    <p align="center"> Privacy Policy | Terms of Service | Contact Us</p>
    </footer>
</body>
</html>
