<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <?php include('header.php');?>
    
    
    <button>Login as Administrator</button>
    <button>Login as Tester</button>
        
    <?php
    
        
    $login = $answer;
        $_SESSION["login"] = $login;
        $login = 1;
        if ($login == NULL)
            echo "<p>Sorry! You are not loged in.</p>";
        else
            echo "Welcome $login";
    ?>


</body>
</html>


<li class="nav-item <?php if ($file === 'about') echo 'active' ?>">
			<a href="about.php">About Us</a>
		</li>