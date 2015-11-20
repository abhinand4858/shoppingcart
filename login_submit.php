<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "myshoppingcart";
$email = $_POST["email"];
$pass = $_POST["pass"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$strSQL = mysqli_query($conn,"select COUNT(email) from user_details where email='".$email."' and password='".md5($pass)."'");
$Results = mysqli_fetch_array($strSQL);
if(count($Results)>=1)
{
    $message = $Results['name']." Login Sucessfully!!";
}
else
{
    $message = "Invalid email or password!!";
}


?>

