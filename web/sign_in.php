<?php
    session_start();
    require("dbConnect.php");
    $db = get_db();
    
?>

<!DOCTYPEhtml>
<html>
    <head>
        <title>BestHookForward | Sign In</title>
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
            <div id="already_member">
                <h2>Sign In</h2>
                <form method="post" action="get_signed_in.php">
                    Username: <input type="text" name="username"/><br>
                    Password: <input type="password" name="password"/><br>
                    <input type="submit" value="Sign In"/>
               </form>
            </div>
            <div id="not_member">
            <h2>Become a Member</h2>
                <form method="post" action="create_new_member.php">
                    First Name: <input type="text" name="first_name"/><br>
                    Last Name: <input type="text" name="last_name"/><br>
                    Username: <input type="text" name="username"><br>
                    Password: <input type="password" name="password"/><br>
                    <input type="submit" value="Join">
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