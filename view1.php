<?php
include("links.html");
echo "<br>";
$sename = "127.0.0.1";
$uname = "root";
$pass = "";
$dbname = "stu";
$conn=mysqli_connect($sename,$uname,$pass,$dbname);
if(!$conn)
{
    die("connection failed".mysqli_connection_error());
}
$no=$_POST["no"];
$mysql="SELECT * FROM stud where rno=$no"; 
$result=mysqli_query($conn, $mysql);
echo "<style>
        *{
            background:aqua;
        }
    </style>";
if(mysqli_num_rows($result) === 0) {
    echo "<center><h1>Enter a valid Registred Number</h1></center>";
} else {
    echo "<table border='2'>";
echo "<tr><th>Name</th><th>Roll No.</th><th>Email</th><th>Password</th><th>Phone No.</th><th>Gender</th><th>DOB</th><th>Address</th><th>Course</th></tr>";
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['rno']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['pass']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['dob']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['course']."</td>";
    echo "</tr>";
}
echo "</table>"; 
}
mysqli_close($conn);
?>
