<?php
session_start();

//Only create empty array once
if(!isset($_SESSION['order'])){
    //Create session as array so that multiple games can be added to the basket
    $_SESSION['order'] = array();
}

//Get gameID from form button "Add to Basket" clicked
$gameID = $_GET['gameID'];

//store array of gameIDs 
$_SESSION['order'][] = $gameID;

//Go to basket page so user can view the current order
header('Location: basket.php');

?>