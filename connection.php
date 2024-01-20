<?php
$servername = "#server name";
$username = "#user name";
$password = "#password";
$dbname = "#database name";

// Create connection
// $conn = new mysqli($servername, $username, $password,$dbname);

$conn=mysqli_connect($servername,$username,$password,"$dbname");
// if($conn)
// {
// echo "successful";
// }
// else 
// {
// echo "unsuccessful";
// }
?>
