<?php 
//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "17123433";   

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>