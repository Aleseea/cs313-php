<?php
session_start();

    require("dbConnect.php");
    $db = get_db();


foreach($_SESSION["cart"] as $item => $quantity){
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="hooked.css"/>
        <link rel="stylesheet" href="hooked_cart.css"/>
    </head>
    
    <body>
        
        <?php require("header.php");?>
        <main>
            <h2>Your Cart</h2>
                    
                <?php
            //var_dump($_SESSION);
            foreach($_SESSION["cart"] as $item => $quantity){
                foreach ($db->query("SELECT i.item_id, i.item_name, i.item_price,  img.image_url FROM image img  JOIN item i ON img.item_id = i.item_id WHERE img.item_id = i.item_id AND i.item_id = '$item';") as $row){
                                     
                    echo '<img src="img/' . $row['image_url'] . '">';
                    echo '<p>' . $row['item_name'] . '</p>';
                    echo '<p>' . $row['item_price'] . ' </p>';
                    echo "<p> $quantity</p>";
                    echo "<a href='remove_from_cart.php?item=". $item ."'> Remove Item From Cart</a><br>";
                    
                }
            }
                    
                    ?>
            <ul>
                <li><a href="index.php">Return to Browsing</a></li>
                <li><a href="checkout.php">Continue to Checkout</a></li>
            </ul>
        </main>
        <?php require("footer.php");?>
    </body>
</html>