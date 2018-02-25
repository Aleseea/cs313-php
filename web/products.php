<!--php for local host-->
<?php
    session_start();

    require("dbConnect.php");
    $db = get_db();

//Start Session

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
        <?php require("footer.php");?>>
    </body>
</html>