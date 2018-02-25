
<?php
    $street = htmlspecialchars($_REQUEST['street']);
    $city = htmlspecialchars($_REQUEST['city']);
    $state = htmlspecialchars($_REQUEST['state']);
    $zip_code = htmlspecialchars($_REQUEST['zip_code']);
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Hooked | Confirmation</title>
        <link rel="stylesheet" href="hooked.css"/>
    </head>
    <body>
        <header>
            <h1>Confirmation!</h1>
        </header>
        <main>
            <h2>Your Items Have Been Successfully Purchased!</h2>
            
            <h2>They will be shipped to:</h2>
            <div id="display_address">
                <?php
                    echo $street . "<br>";
                    echo $city . ", ";
                    echo $state . " ";
                    echo $zip_code;
                ?>
            </div>
            <a href="index.php">Back to Browsing</a>
        </main>
    </body>
</html>