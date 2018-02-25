<!--php for local host-->
<?php
    session_start();
    //session_destroy();
    require("dbConnect.php");
    $db = get_db();



//if session not set then set to an empty string
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
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
        
        <?php require("header.php");?>
        
        <main>
            <a href="products.php?type=Toy">
                <figure>
                    <img src="img/rabbits.jpg">
                    <figcaption>
                        <h2>Toys</h2>
                    </figcaption>
                </figure>
            </a>
            <a href="products.php?type=Blanket">
                <figure>
                    <img src="img/blue_brown_white_blanket.jpg">
                    <figcaption>
                        <h2>Blankets</h2>
                    </figcaption>
                </figure>
            </a>
            <a href="products.php?type=Home Decor">
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
            <a href="products.php?type=Other">
                <figure>
                    <img src="img/flowers.jpg">
                    <figcaption>
                        <h2>Other</h2>
                    </figcaption>
                </figure>
            </a>
            
        </main>
        
        <?php require("footer.php");?>
        
    </body>
    
</html>