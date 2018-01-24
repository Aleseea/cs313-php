<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<header>
	<script type="">
		var parser = document.createElement('a');
		parser.href = window.location.href;

			
		function load() {
			if (parser.pathname == "/team-activity/home.php") 
				{document.getElementById("homeLink").style.fontWeight = "bold"}
			else if (parser.pathname == "/team-activity/about-us.php") 
				{document.getElementById("aboutLink").style.fontWeight = "bold"}
			else if (parser.pathname == "/team-activity/login.php") 
				{document.getElementById("loginLink").style.fontWeight = "bold"}
		}
	</script>
	<body onload="load()">
	<h1>Hack the Planet</h1>
	<nav>
		<a href="home.php" id="homeLink">Home</a>  <a href="about-us.php" id="aboutLink">About Us</a> <a href="login.php" id="loginLink">Login</a>
	</nav>
</header>
</body>