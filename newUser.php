<?php
//ADD NEW EMPLOYEE TO DATABASE

//Connect to databse 
include('connect.php');

//Get data from form
$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);


//Insert data from form to employees database
$sql = "INSERT INTO employees (`username`, `password`, `name`) VALUES ('$username', '$password', '$name')";


//Messages for testing
if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
    
//Go back to account
header("Location: account.php");
?>