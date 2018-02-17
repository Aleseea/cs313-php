<?php
require("dbConnect.php");

$db = get_db();

$course_id = htmlspecialchars($_POST['course_id']);
$date = htmlspecialchars($_POST['date']);
$content = htmlspecialchars($_POST['content']);

var_dump($course_id);
var_dump($date);
var_dump($content);

//DO the insert INTO query here...
// Make sure to bind the parameters!!!

header('Location: notes.php');
die();

?>