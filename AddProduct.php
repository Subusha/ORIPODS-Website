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
<title>Add Product</title>
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
				<button onClick="location.href='Login.php'" style="margin-left: -3cm">Login</button>
			</ul>
			<a class="cartLogo" href="Cart.html"><img src="Images/cart.png" alt="cart" width="58" height="60"></a>
			<a class="adminLogo" href="AdminLog.php"><img src="Images/admin.png" alt="cart" width="87" height="87"></a>
		</div>
	</nav>
 <div class="bgImg"><img src="Images/5.jpg" alt="Background Image">

<section class="Add">
<div class="form-style-5" style="margin-top: -18cm;">
<form action="AddProduct.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend style="margin-left: 180px;">Product Info</legend>
<p>
  <input type="text" name="txtTitle" placeholder="Product Name *" required>
  <textarea name="txtDescription" placeholder="Describe about the product"></textarea>
  <textarea name="txtPrice" placeholder="Price"></textarea>
  <input type="file" name="imageFile" placeholder="Upload a Picture" required>
  Category  <select name="lstCategory">
    <option value="Apple">Apple</option>
    <option value="Samsung">Samsung</option>
    <option value="JBL">JBL </option>
     <option value="Sony">Sony</option>
     <option value="Beats">Beats</option>
    <option value="other">Other</option>
    </select>
</p>    
</fieldset>
	
<fieldset>
 <label for="chkPublish">Publish the Product : 
  <input type="checkbox" name="chkPublish">
</label>
</fieldset>
    
<p>
  <input type="submit" value="Add Post" name="btnSubmit"/>
</p>
<?php
	if(isset($_POST["btnSubmit"]))
{

//read the values user has given asign to variable
$productname = $_POST["txtTitle"];	
$description = $_POST["txtDescription"];
$price = $_POST["txtPrice"];
$category = $_POST["lstCategory"];
		
if(isset($_POST["chkPublish"]))
{
	$status = 1;
}
else
{
	$status = 0;
}

$image = "uploads/".basename($_FILES["imageFile"]["name"]);
move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
		
//connect with the database
$con = mysqli_connect("localhost","root","","website","3306");

//error handling
if(!$con)
{
	die("Sorry, web are facing a technical issue");
}

//Sql Query
$sql = "INSERT INTO `tblproduct`(`productID`, `productName`, `description`, `price`, `publish`, `category`, `imagePath`, `email`) VALUES (NULL,'".$productname."','".$description."','".$price."','".$status."','".$category."','".$image."','".$_SESSION["userName"]."')";

//excute the query against the database
if(mysqli_query($con,$sql))
{
	echo "Product uploaded successfully"; 
}
else
{
	echo "Opps something is wrong, Please select the file again";
}
}
?>
</form>
</div>
</div>
</body>
</html>