<?php
include("links.html");
echo "<br>";
echo "<style>
*{
    background:aqua;
}
</style>";

$email = $_POST['email']; 
$pass = $_POST['pass']; 

$servername = "127.0.0.1";
$username = "root";
$password = ""; 
$dbname = "stu";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Corrected: Added quotes around $email in the SQL query
$query = "SELECT email, pass FROM admin WHERE email='$email'";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
    // Corrected: Use correct variable names and comparison operators
    if ($row['email'] === $email && $row['pass'] === $pass) {
        echo "<center><h1>Login as admin successfully.</h1></center>";
    } else {
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
    }
} else {
    echo "<center><h1>User not found.</h1></center>";
}
mysqli_close($conn);
?>
