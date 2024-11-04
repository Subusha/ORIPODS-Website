<?php session_start();
		
//connect with the database
$con = mysqli_connect("localhost","root","","website","3306");

//error handling
if(!$con)
{
	die("Sorry, web are facing a technical issue");
}

//Sql Query
$sql = "DELETE FROM `tblproduct` WHERE `tblproduct`.`productID` =  ".$_SESSION["id"].";";

//excute the query against the database
if(mysqli_query($con,$sql))
{
	header('Location:ViewProduct.php');
}
?>