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
//session_destroy();

//if session not set then set to an empty string
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
?>

<!--OTHER PHP-->
<?php
    
?>

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
            <a href="products.php?type=toys">
                <figure>
                    <img src="img/rabbits.jpg">
                    <figcaption>
                        <h2>Toys</h2>
                    </figcaption>
                </figure>
            </a>
            <a href="products.php?type=blanket">
                <figure>
                    <img src="img/blue_brown_white_blanket.jpg">
                    <figcaption>
                        <h2>Blankets</h2>
                    </figcaption>
                </figure>
            </a>
            <a href="products.php?type=decor">
                <figure>
                    <img src="img/pillows.jpg">
                    <figcaption>
                        <h2>Home Decor</h2>
                    </figcaption>
                </figure>
            </a>
            <a href="products.php?type=Clothing">
                <figure>
                    <img src="img/boots.jpg">
                    <figcaption>
                        <h2>Clothes</h2>
                    </figcaption>
                </figure>
            </a>        
            <a href="products.php?type=other">
                <figure>
                    <img src="img/flowers.jpg">
                    <figcaption>
                        <h2>Other</h2>
                    </figcaption>
                </figure>
            </a>
            
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