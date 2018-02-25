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
        <?php require("header.php");?>
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
        <?php require("footer.php");?>
    </body>
</html>