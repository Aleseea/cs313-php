<?php
session_start();

require("dbConnect.php");
$db = get_db();



$ID = htmlspacialchars($_POST['member_id']);
$email = htmlspecialchars($_POST['email_address']);
$phone = htmlspecialchars($_POST['phone_number']);
$address = htmlspecialchars($_POST['street_address']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$zip = htmlspecialchars($_POST['zip_code']);

 //var_dump($ID);
 //var_dump($email);
 //var_dump($phone);
 //var_dump($address);
 //var_dump($city);
 //var_dump($state);
 //var_dump($zip);

$query = "INSERT INTO contact(member_id, email_address, phone_number, street_address, city, state, zip_code) VALUES (:email, :phone, :address, :city, :state, :zip)";

$stmt = $db->prepare($query);
// Bind any parameters
$stmt->bindValue(":email", $email, PDO::PARAM_STR);
$stmt->bindValue(":phone", $phone, PDO::PARAM_INT);
$stmt->bindValue(":address", $address, PDO::PARAM_STR);
$stmt->bindValue(":city", $city, PDO::PARAM_STR);
$stmt->bindValue(":state", $state, PDO::PARAM_STR);
$stmt->bindValue(":zip", $zip, PDO::PARAM_INT);

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