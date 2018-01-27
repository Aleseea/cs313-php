
<?php
    $street = htmlspecialchars($_REQUEST['street']);
    $city = htmlspecialchars($_REQUEST['city']);
    $state = htmlspecialchars($_REQUEST['state']);
    $zip_code = htmlspecialchars($_REQUEST['zip_code']);
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Shopping | Confirmation</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <header>
            <h1>Confirmation!</h1>
            <nav>
                <ul>
                    <li><a href="delete_session.php">Bowse Some more</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h2>You have successfully purchased:</h2>
            <?php
                foreach($_SESSION["cart"] as $item => $quantity){
                        echo "<p>" . $item . " " . $quantity . "</p>";
                }
            ?>
            <h2>Your items will be shipped to:</h2>
            <div id="display_address">
                <?php
                    echo $street . "<br>";
                    echo $city . ", ";
                    echo $state . " ";
                    echo $zip_code;
                ?>
            </div>
            
        </main>
    </body>
</html>