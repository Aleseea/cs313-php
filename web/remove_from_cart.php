<?php
session_start();

function removeItem($item) {
    if (!isset($_SESSION["cart"][$item])){
        $_SESSION["cart"][$item] = 0;
    }
    else if($_SESSION["cart"][$item] <= 1){
        unset($_SESSION["cart"][$item]);
    }
        
    else $_SESSION["cart"][$item]--;
}


$removeTheItem = $_GET["item"];
removeItem($removeTheItem);

header("Location: cart.php");

?>