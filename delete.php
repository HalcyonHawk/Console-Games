<div class="container">
<?php
//DELETE FROM DATABASE

//Connect to databse 
include('connect.php');

//Get gameID from URL to delete that game
$gameID = $_GET['gameID'];

//Delete game from table based on given gameID
$sql = ("DELETE FROM games WHERE gameID='$gameID'");
 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
$conn->close();
    
//After delete redirect to account
header("Location: account.php");
    
?>
</div>