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
echo"<style>
*{
    background:aqua;
}
</style>";
$no=$_POST["no"];
$mysql="SELECT * FROM stud where rno=$no"; 
$result=mysqli_query($conn, $mysql);
if(mysqli_num_rows($result) === 0) {
    echo "<center><h1>Enter a valid Registered Number</h1></center>";
}
else{
$name=$_POST["name"];
$mysq="update stud set name='$name' where rno=$no";  
$res=mysqli_query( $conn,$mysq);
    echo "one record updated successfully";
}
mysqli_close($conn);
?>