<?php session_start();
if(isset($_POST["btnSubmitReg"]))
{

//read the values user has given asign to variable
$username = $_POST["txtUsername"];	
$email = $_POST["txtEmail"];
$password = $_POST["txtPassword"];	
	
//connect with the database
$con = mysqli_connect("localhost:3306","root","","UserRegistrationDB");

//error handling
if(!$con)
{
	die("Sorry, web are facing a technical issue");
}

//Sql Query
$sql = "INSERT INTO `Users` (`email`, `username`, `password`) VALUES ('".$email."', '".$username."', '".$password."');";

//excute the query against the database
if(mysqli_query($con,$sql));
{
header('Location:Login.php');
}
}
?>