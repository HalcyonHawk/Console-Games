<?php 
//End order session and return to basket page
session_start();
unset($_SESSION['order']);
header('Location: basket.php');
?>