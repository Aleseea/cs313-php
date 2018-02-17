<!--php for local host-->
<?php
    require("dbConnect.php");
    $db = get_db();
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
                $ID = $_GET["itemID"];
            
                foreach ($db->query("SELECT i.item_name, i.item_price, i.description, img.image_url FROM image img  JOIN item i ON img.item_id = i.item_id WHERE img.item_id = i.item_id AND i.item_id = '$ID';") as $row){
                    echo '<div id="description">';
                    echo '<figure>';                 
                    echo '<img src="img/' . $row['image_url'] . '">';
                    echo '<figcaption>' . $row['item_name'] . '</figcaption>';
                    echo '</figure><p>';
                    echo $row['item_price'] . ' </p><p>';
                    echo $row['description'] . ' </p><a href="add_to_cart.php?item='. $row['item_id'] .'" >Add to Cart</a>';
                    echo '</p></div>';
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