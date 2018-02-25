<?php
    session_start();
    require("dbConnect.php");
    $db = get_db();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
    
    foreach ($db->query("SELECT member_id FROM member WHERE username = '$username';") as $row){
                                     
                    $member_id = $row['member_id'];
        //echo $member_id;
                    
                }
    
}
else
{
	header("Location: sign_in.php");
	die(); // we always include a die after redirects.
}
    
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
                    <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
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