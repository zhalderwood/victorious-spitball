<?php
    if (!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === TRUE) {
        header("location: home.html");
        exit;
    }
    elseif (!$_SESSION["user_is_mod"]) { header("location: login_home.php"); }
?>

<html>
	<head>
		<title>Advertisements Manager Database</title>
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>	
	<body>
		<div class="navigationBar">
			<a href="home.html">Home</a>
			<a href="login.php">Create Ad</a>
			<a href="employeeInformation.php">View Ads</a>
		</div>	
		<div style = "padding-left: 16px">
			<h2>Welcome to the Advertisements Manager Database!</h2>
			<h4>Use the navigation bar above to access various pages.</h4>
			<h4><u>Home</u> will take you... Home!</h4>
			<h4><u>Create Ad</u> will take you to a login page so that you can create an ad!</h4>
			<h4><u>View Ads</u> will take you to a page listing all ads! !WORK IN PROGRESS!</h4>
	</body>
</html>