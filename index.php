<html>
    <head>
        <title>Anji It Solutions</title>
    </head>
    <body>
    <a href="index.html">Home |</a>
    </body>
</html>
<?php
echo "<style>
        *{
            background:aqua;
        }
    </style>";
// Step 1: Establish connection to the database
$servername = "127.0.0.1"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "stu"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve form data
$no = $_POST["rno"];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$course =$_POST['course'];
// Step 4: Insert data into the database
$sql = "INSERT INTO stud(name, email, pass, phone, gender,dob, address,course,rno) VALUES ('$name', '$email', '$pass', '$phone','$gender','$dob ', '$address','$course',$no)";
if ($conn->query($sql) === TRUE) {
    echo "</br><center><h1>Registration Completed Successfully</h1></center>" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
