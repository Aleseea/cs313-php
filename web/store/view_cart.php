<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Shopping | Cart</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <header>
            <h1>Your Cart</h1>
            <nav>
                <ul>
                    <h1>Your Cart</h1>
                    <li><a href="browse.php">Return to Browsing</a></li>
                    <li><a href="checkout.php">Continue to Checkout</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
                // var_dump($_SESSION);
                foreach($_SESSION["cart"] as $item => $quantity){
                    echo "<p>" . $item . " " . $quantity . "<a href='remove_from_cart.php?item=". $item ."'> Remove Item From Cart</a>" . "</p>";
                }
            ?>
        </main>
    </body>
</html>