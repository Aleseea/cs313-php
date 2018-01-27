<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Shopping | Checkout</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <header>
            <h1>Checkout</h1>
            <nav>
                <ul>
                    <li><a href="view_cart.php">Reture to the Cart</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h2>Please Enter Your Shipping Address Below</h2>
            <form method="post" action="confirmation.php">
                <input type="text" name="street" placeholder="Street Address"/><br>
                <input type="text" name="city" placeholder="City"/><br>
                <input type="text" name="state" placeholder="State"/><br>
                <input type="text" name="zip_code" placeholder="Zip Code"/><br>
                <input type="submit" name="submit" value="Complete Purchase"/>
            </form>
        </main>
    </body>
</html>