<?php
    session_start();


    
?>

<!DOCTYPEhtml>
<html>
    <head>
        <title>BestHookForward | Sign Up</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="hooked.css"/>
    </head>
    <body>
        <?php require("header.php");?>
        <main>
            <h2>Create an Account</h2>
            <div id="not_member">
            <h2>Become a Member</h2>
                <form method="post" action="create_new_member.php" id="mainForm">
                    First Name: <input type="text" name="first_name" id="first_name"/>
                    <br>
                    Last Name: <input type="text" name="last_name" id="last_name"/><br>
                    Username: <input type="text" name="username" id="username"/><br>
                    Password: <input type="password" name="password" id="password"/><br>
                    <input type="submit" value="Create Account">
                </form>
            </div>
        </main>
        <?php require("footer.php");?>
    </body>
</html>