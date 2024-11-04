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
</head>

<body style="bg-color: white; background-image: url('Images/5.jpg')">
	<nav class="navbar">
		<div class="navdiv">
			<a class="logo" href="Home.html" ><img src="Images/Logos/Logo4.1.png" alt="Shop Logo"></a>
			<ul>
				<li><a href="Admin.php"> Admin Home</a></li>
				<li><a href="Catagories.html">Catagories</a></li>
				<li><a href="AddProduct.php">Add products</a></li>
				<li><a href="ViewProduct.php">View Product</a></li>
				<button onClick="location.href='Login.php'" style="margin-left: -3cm;">Login</button>
			</ul>
			<a class="cartLogo" href="Cart.html"><img src="Images/cart.png" alt="cart" width="58" height="60"></a>
			<a class="adminLogo" href="AdminLog.php"><img src="Images/admin.png" alt="cart" width="87" height="87"></a>
		</div>
	</nav>
		
<?php

//Create a session to record the product ID
$_SESSION["id"] = $_GET["id"];	
	
//connect with the database
$con = mysqli_connect("localhost","root","","website","3306");

//error handling
if(!$con)
{
	die("Sorry, web are facing a technical issue");
}

//Sql Query
$sql = "SELECT * FROM `tblproduct` WHERE `productID` = ".$_GET["id"]."";

$result = mysqli_query($con,$sql);
	
$row = mysqli_fetch_assoc($result);
?>
<div class="form-style-5" style="margin-top: 50px;">
<form action="EditHandle.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend style="margin-left: 180px;">Product Info</legend>
<p>
  <input type="text" name="txtTitle" placeholder="Product Name *" value="<?php echo $row["productName"]; ?>" >
  <textarea name="txtDescription" placeholder="Describe about the product"><?php echo $row["description"]; ?></textarea>
  <input type="file" name="imageFile" placeholder="Upload a Picture" value="<?php echo $row["imagePath"]; ?>">
	
  <?php $_SESSION["imagePath"] = $row["imagePath"]; ?>
	
  Category   <select  name="lstCategory">
    <option value="Apple" <?php if($row["category"] == "Apple") {echo"selected";} ?>>Apple</option>
    <option value="Samsung" <?php if($row["category"] == "Samsung") {echo"selected";} ?>>Samsung</option>
    <option value="JBL" <?php if($row["category"] == "JBL") {echo"selected";} ?>>JBL </option>
     <option value="Sony" <?php if($row["category"] == "Sony") {echo"selected";} ?>>Sony</option>
     <option value="Beats" <?php if($row["category"] == "Beats") {echo"selected";} ?>>Beats</option>
    <option value="other" <?php if($row["category"] == "other") {echo"selected";} ?>>Other</option>
    </select>
</p>   
</fieldset>
	
<fieldset>
 <label for="chkPublish">Publish the Advertisement : 
  <input type="checkbox" name="chkPublish" <?php if($row["publish"] == "1") {echo"checked";} ?>>
</label>
</fieldset>
    
<p>
  <input type="submit" value="Add Post" name="btnSubmit"/>
</p>
</form>
</div>
	<?php    
		mysqli_close($con); //Close connection
	
	?>
</body>
</html>

