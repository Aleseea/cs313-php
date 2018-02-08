<?php
    <?php
$host = "ec2-54-83-204-230.compute-1.amazonaws.com";
$dbname = "d1ondurjq0vip5";
$user = "jurrpvisfqfzkv";
$password = "abfd62239ffff36b3e3a3e9c8aa19b73b533492088f4b26f0d050a28258572bc";
$port = "5432";

$dsn = "pgsql:host=$host;dbname=$dbname;user=$user;port=$port;password=$password";

$db = new PDO($dsn);

if($db){
  echo "Connected <br />".$db;
}else {
  echo "Not connected";
}
 ?>

?>




<html>
<body>

<!--?php

// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:notright@localhost:5432/postgres";
}

$dbopts = parse_url($dbUrl);

print "<p>$dbUrl</p>\n\n";

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName</p>\n\n";

try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

foreach ($db->query('SELECT now()') as $row)
{
 print "<p>$row[0]</p>\n\n";
}

    foreach ($db->query('SELECT * FROM contact') as $row)
{
    echo 'contact id: ' . $row['contact_id'];
    echo ' member id: ' . $row['memebr_id'];
    echo '<br/>';
}
    
    
?-->

</body>
</html>