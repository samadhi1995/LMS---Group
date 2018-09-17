<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="lms";

$conn =mysqli_connect($servername, $username, $password,$dbname);

if (mysqli_connect_errno()) {
    echo "Connection failed: ".mysqli_connect_errno();
}
else{
   // echo "Connected successfully";
}
?>







