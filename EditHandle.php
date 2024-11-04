<?php session_start();
	if(isset($_POST["btnSubmit"]))
{

//read the values user has given asign to variable
$productname = $_POST["txtTitle"];	
$description = $_POST["txtDescription"];
$category = $_POST["lstCategory"];

		
if(isset($_POST["chkPublish"]))
{
	$status = 1;
}
else
{
	$status = 0;
}

if(!file_exists($_FILES['imageFile']['tmp_name']) || !is_uploaded_file($_FILES['imageFile']['tmp_name']))
{
	$image = $_SESSION["imagePath"];
}
else
{
	$image = "uploads/".basename($_FILES["imageFile"]["name"]);
	move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
}
		
//connect with the database
$con = mysqli_connect("localhost","root","","website","3306");

//error handling
if(!$con)
{
	die("Sorry, web are facing a technical issue");
}

//Sql Query
$sql = "UPDATE `tblproduct` SET `productName` = '".$productname."', `description` = '".$description."', `publish` = '".$status."', `category` = '".$category."', `imagePath` = '".$image."' WHERE `tblproduct`.`productID` = ".$_SESSION["id"].";";

//excute the query against the database
if(mysqli_query($con,$sql))
{
	header('Location:ViewProduct.php');
}
}
?>