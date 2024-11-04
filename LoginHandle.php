<?php session_start();
if(isset($_POST["btnSubmit"]))
{

//read the values user has given asign to variable
$email = $_POST["txtEmail"];
$password = $_POST["txtPassword"];

//connect with the database
$con = mysqli_connect("localhost:3306","root","","website");

//error handling
if(!$con)
{
	die("Sorry, web are facing a technical issue");
}

//Sql Query
$sql = "SELECT * FROM `tbluser` WHERE `email` = '".$email."' AND `password` = '".$password."'";

//excute the query against the database
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
	//Create a session
	$_SESSION["userName"]=$email;
	header('Location:Home.html');
}
else
{
	header('Location:Login.php');
}
}
?>