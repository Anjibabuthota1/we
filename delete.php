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
$mysql="DELETE FROM stud where rno=$no";  
$result=mysqli_query( $conn,$mysql);
echo "<style>
*{
    background:aqua;
}
    </style>" ; 
if($result)
{
    echo "<br><center><h1>one record deleted successfully</h1></center>";
}   
mysqli_close($conn);
?>