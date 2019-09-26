<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		<?php include 'views/css/style.css'; ?>
	</style>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	

	<form style="padding-left: 25px">
		<h1 id="home">Home Page</h1>
		<a href="login">Log in</a>	
		<a href="register">Register</a> <br><br><br>
	</form>

	<h1 id="home">Search users</h1>
	<form method="GET" action="/results" id="search">
		<input name="searchVal" required></input>
		<button type="submit">Search</button>
		<button type="reset">Clear</button>
	</form>
</body>
</html>