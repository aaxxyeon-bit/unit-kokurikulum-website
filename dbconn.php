<?php
// Database connection details
$host = "localhost";        // Database host
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "internship";     // Database name

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>