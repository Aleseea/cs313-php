<!--php for local host-->
<?php
    try{
          $user = 'postgres';
          $password = '19Faye96';
          $db = new PDO('pgsql:host=localhost;dbname=postgres', $user, $password);
            $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch (PDOException $ex){
        echo 'Error!: ' . $ex->getMessage();
        die();
    }
?>


<!--php for heroku-->
<!--?php
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
?-->

<!--Start Session-->
<?php
session_start();
?>

<!--OTHER PHP-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="hooked.css"/>
    </head>
    
    <body>
        
        <header>
            <img scr="">
            <h1>Best Hook Forward</h1>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="sign_in.php">Sign In</a>
                    </li>
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
                $item = $_GET["type"];
            
                foreach ($db->query("SELECT i.item_name, i.item_id, img.image_url FROM image img  JOIN item i ON img.item_id = i.item_id WHERE img.item_id = i.item_id AND i.item_type = '$item';") as $row){
                    echo '<a href="description.php?itemID='. $row['item_id'] .'">';
                    echo '<figure>';                 
                    echo '<img src="img/' . $row['image_url'] . '">';
                    echo '<figcaption>' . $row['item_name'] . '</figcaption>';
                    echo '</figure></a>';
                }
            ?>
        </main>
        <footer>
            <div id="footer_nav">
                <nav>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="sign_in.php">Sign In</a>
                        </li>
                        <li>
                            <a href="cart.php">Cart</a>
                        </li>
                    </ul>
                </nav>
                <nav id="social">
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Pinterest</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </body>
</html>