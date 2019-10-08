<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		<?php include 'views/css/style.css'; ?>
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<h1 id="home">Search users</h1>
	<form method="GET" action="/results" id="search">
		<h3>Choose here type of search</h3>
		<input name="searchVal" required></input>
		<button type="submit">Search</button>
		<button type="reset">Clear</button>
	</form>

	<form style="padding-left: 25px">
		<h1 id="home">Home Page</h1>
		<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>
			<a href="logout-user">Log Out</a>
		<?php else: ?>
			<a href="login">Log In</a>
		<?php endif; ?>
		<a href="register">Register</a> <br><br><br>
	</form>
</body>
</html>