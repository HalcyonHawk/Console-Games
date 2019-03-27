<?php
//UPDATE GAME IN DATABASE 

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

//Update games with data inputed where the gameID equals the gameID in the table 
$sql = "UPDATE games SET consoleName='$consoleName', gameName='$gameName', imageName='$imageName', price='$price', genre='$genre', ageRating='$ageRating' WHERE gameID='$gameID'";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
    
//Go back to account
header("Location: account.php");
?>