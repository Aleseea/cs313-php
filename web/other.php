<?php

$dbUrl = getenv('HEROKU_POSTGRESQL_BLACK_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);


foreach ($db->query('SELECT * FROM contact') as $row)
{
    echo 'Contact ID: ' . $row['contact_id'];
    echo ' Member ID: ' . $row['member_id'];
    echo ' Email Address: ' . $row['email_address'];
}
?>