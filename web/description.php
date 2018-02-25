<?php
session_start();

    require("dbConnect.php");
    $db = get_db();

?>


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
            <?php
                $ID = $_GET["itemID"];
            
                foreach ($db->query("SELECT i.item_id, i.item_name, i.item_price, i.description, img.image_url FROM image img  JOIN item i ON img.item_id = i.item_id WHERE img.item_id = i.item_id AND i.item_id = '$ID';") as $row){
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
        <?php require("footer.php");?>
    </body>
</html>