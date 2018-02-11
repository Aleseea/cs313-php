<?php
session_start();

function addItem($item) {
    if (!isset($_SESSION["cart"][$item])){
        $_SESSION["cart"][$item] = 0;
    }
    $_SESSION["cart"][$item]++;
}


$addTheItem = $_GET["item"];
addItem($addTheItem);

header("Location:index.php");

?>
