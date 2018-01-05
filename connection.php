<?php
$servername = "localhost";
$username = "root";
$password = "10021621894";
$dbname = "wordpress";


$conn = new mysqli($servername, $username, $password, $dbname);

$sSQL= 'SET CHARACTER SET utf8';

mysqli_query($conn,$sSQL)

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>