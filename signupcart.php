<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="loginstyle.css">

</head>
<body>


<div class="nav nav-tabs">

    <li role="presentation"> <a href="index.html">Home </a></li>
    <a href="login.html" class="pull-right" style="margin-top: 5px; margin-right: 20px;"><button class="btn btn-primary">Login</button> </a>

</div>
<br>
<br>

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


$sql = "INSERT INTO user_details (email, password) VALUES ('$email', '".md5($pass)."' )";

if (mysqli_query($conn, $sql)) {
    echo "<h2>You have successfully signed up</h2>";
    echo "<h2>Login to Purchase</h2>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>





</div>

</body>

</html>


