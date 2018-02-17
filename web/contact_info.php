<?php
    session_start();
    require("dbConnect.php");
    $db = get_db();
    
?>

<!DOCTYPEhtml>
<html>
    <head>
        <title>BestHookForward | Contact Info</title>
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
            <div id="contact_info">
                <h2>Contact/Shipping Info</h2>
                <form method="post" action="update_contact.php">
                    <input type="hidden" name="member_id" value="<?php $_POST['member_id'] ?>">
                    Email Address: <input type="email" name="email_address"/><br>
                    Phone Number: <input type="number" name="phone_number"/><br>
                    Street Address: <input type="text" name="street_address"><br>
                    City: <input type="text" name="city"/><br>
                    State: <input type="text" name="state"/><br>
                    Zip Code: <input type="number" name="zip_code"/><br>
                    <input type="submit" value="Update">
                </form>
            </div>
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