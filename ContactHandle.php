<?php session_start();
if(isset($_POST["btnSubmitCon"]))
{

// Get the form data
$name = $_POST["txtName"];
$email = $_POST["txtEmail"];
$message = $_POST["txtMessage"];

//connect with the database
$con = mysqli_connect("localhost:3306","root","","website");

//error handling
if(!$con)
{
	die("Sorry, web are facing a technical issue");
}

// Validate the form data
if (empty($name)) {
  echo "Please enter your name.";
  exit;
}

if (empty($email)) {
  echo "Please enter your email address.";
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Please enter a valid email address.";
  exit;
}

if (empty($message)) {
  echo "Please enter your message.";
  exit;
}

// Send the email
$subject = "Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";

//mail("chatuniduwara@gmail.com", $subject, $body);

//SQL Query
$sql = "INSERT INTO `tblcontact`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."');";

$result = NULL;

//excute the query against the database
$result = mysqli_query($con,$sql);

if ($result === false) {
  die("Error inserting data into the database: " . mysqli_error($conn));
}
else
{
	// Display a success message
	echo "Your message has been sent.";
}
	
header('Location:Contact.php');

// Close the connection to the database
mysqli_close($con);
}
?>
