<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header('Location:login.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Products</title>
<link rel="stylesheet" type="text/css" href="HomeCss.css">
<link href="webfonts/BlackOpsOne_Regular/stylesheet.css" rel="stylesheet" type="text/css">
<style>
	html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 10px;
  padding right: 10px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  margin-left: 40px;
  margin-top: 60px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>

<body style="bg-color: white; background-image: url('Images/5.jpg')">
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
    <?php
//connect with the database
$con = mysqli_connect("localhost","root","","website","3306");

//error handling
if(!$con)
{
	die("Sorry, web are facing a technical issue");
}

//Sql Query
$sql = "SELECT * FROM `tblproduct`";

//excute the query against the database
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		
?>
  <div class="row">
  <div class="column">
    <div class="card">
	  <p></p>
      <img src="<?php echo $row["imagePath"]; ?>"  style="width:100%" >
      <div class="container">
        <h2 style="margin-top: -40px; padding-bottom: 20px"><?php echo $row["productName"]; ?></h2>        
        <h3 style="padding-bottom: 10px;"><?php echo $row["category"]; ?></h3>
		<p style="padding-bottom: 10px;"><?php echo $row["description"]; ?></p>
        <a href="Buy.html"><button class="Buy" style="margin-left: -1.5cm;">Buy Now</button></a>
		<a href="Cart.html"><button class="AddCart">Add to Cart</button></a>
        <br><br>
      </div>
    </div>
  </div>
<?php
		}
	}
	
	mysqli_close($con); //close the connection
?>
</body>
</html>

