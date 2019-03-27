<?php
//ADD GAME TO DATABASE

//Connect to databse 
include('connect.php');

//Get data from form
$gameID = $_POST['gameID'];
$consoleName = $_POST['consoleName'];
$gameName = $_POST['gameName'];
$imageName = $_POST['imageName'];
$price = $_POST['price'];
$genre = $_POST['genre'];
$ageRating = $_POST['ageRating'];


//Insert data from form to games database
$sql = "INSERT INTO games (`gameID`, `consoleName`, `gameName`, `imageName`, `price`, `genre`, `ageRating`) VALUES ('$gameID', '$consoleName', '$gameName', '$imageName', '$price', '$genre', '$ageRating')";


//Messages for testing
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
    
//Go back to account
header("Location: account.php");
?>