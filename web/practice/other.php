<?php
try
{
  $user = 'postgres';
  $password = '19Faye96';
  $db = new PDO('pgsql:host=localhost;dbname=postgres', $user, $password);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


foreach ($db->query('SELECT * FROM note_user') as $row)
{
    echo 'user: ' . $row['username'];
    echo ' password: ' . $row['password'];
    echo '<br/>';
}
?>
  
