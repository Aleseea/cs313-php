<?php
session_start();
require("dbConnect.php");

$db = get_db(); 
    $username = $_POST["username"];
    $password = $_POST["password"];
    foreach ($db->query("SELECT member_id, first_name, last_name FROM member WHERE username = '$username' AND password = '$password';") as $row){
        
        echo '<a href="index.php?ID='. $row['member_id'] .'">here</a>';
    }
?>
