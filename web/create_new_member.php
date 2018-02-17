<?php
session_start();
require("dbConnect.php");
$db = get_db();

$firstname = htmlspecialchars($_POST['first_name']);
$lastname = htmlspecialchars($_POST['last_name']);
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

// var_dump($course_id);
// var_dump($date);
// var_dump($content);

$query = "INSERT INTO member(first_name, last_name, username, password) VALUES (:first_name, :last_name, :username, :password)";

$stmt = $db->prepare($query);
// Bind any parameters
$stmt->bindValue(":first_name", $firstname, PDO::PARAM_STR);
$stmt->bindValue(":last_name", $lastname, PDO::PARAM_STR);
$stmt->bindValue(":username", $username, PDO::PARAM_STR);
$stmt->bindValue(":password", $password, PDO::PARAM_STR);

try {
	// SB: This was silently failing on me a lot, so to help debug it, I put it inside a try catch block. It was generating an exception, and it helped me track down my problem.
	$stmt->execute();
} catch (Exception $ex) {
	// If this were in production, you would not want to echo
	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	var_dump($ex);
	die();
}

$index = "index.php?first_name=$firstname";
header("Location: $index");

die();
?>