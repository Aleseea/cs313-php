<?php
    session_start();
    /*require("dbConnect.php");*/
	/*$db = get_db();


    $badLogin = false;

    if (isset($_POST['txtUsername']) && isset($_POST['txtPassword']))
{
	$username = $_POST['txtUsername'];
	$password = $_POST['txtPassword'];
	// Connect to the DB
	
	$query = 'SELECT password FROM login WHERE username=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];
		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: index.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}*/

/**********************************************************
* File: signIn.php
* Author: Br. Burton
* 
* Description: This page has a form for the user to sign in.
*
* In this case, to show another approach, we will have this
* page have two purposes, it will have the form for signing
* in, but it will also have the logic to check a username
* and password and redirect the user to the home page if
* everything checks out. Thus it will post to itself.
***********************************************************/
// If you have an earlier version of PHP (earlier than 5.5)
// You need to download and include password.php.
//require("password.php"); // used for password hashing.
session_start();
$badLogin = false;
// First check to see if we have post variables, if not, just
// continue on as always.
if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];
	// Connect to the DB
	require("dbConnect.php");
	$db = get_db();
	$query = 'SELECT password FROM member WHERE username=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];
		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: index.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}
// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

<!DOCTYPEhtml>
<html>
    <head>
        <title>BestHookForward | Sign In</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="hooked.css"/>
    </head>
    <body>
        <?php require("header.php");?>
        <main>
            <?php
            if ($badLogin)
            {
	   echo "Incorrect username or password!<br /><br />\n";
            }
            ?>

            <h1>Please sign in below:</h1>

            <form id="mainForm" action="sign_in.php" method="POST">

	           <input type="text" id="txtUser" name="txtUser" placeholder="Username">
	           <label for="txtUser">Username</label>
	           <br /><br />

	           <input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
	           <label for="txtPassword">Password</label>
	           <br /><br />

	           <input type="submit" value="Sign In" />

            </form>
                <p>Or you can</p>
            <a href ="sign_up.php">Create an Account</a>
        </main>
        <?php require("footer.php");?>
    </body>
</html>