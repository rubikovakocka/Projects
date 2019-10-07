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

	<form style="padding-left: 25px">
		<h1 id="home">Home Page</h1>
		
		<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>
			<a href="logout-user">Log Out</a>
		<?php else: ?>
			<a href="login">Log In</a>
		<?php endif; ?>
		
		<a href="register">Register</a> <br><br><br>
	</form>
	
	<h1 id="home">Search users</h1>
	<form method="GET" action="/results" id="search">
		<h3>Choose here type of search</h3>
		<select name="position" multiple="multiple">
    		<option value="frontend" class="optionGroup">Front End Developer</option>
    			<option value="" class="optionChild"></option>
    		<option value="backend" class="optionGroup">Back End Developer</option>
				<option value="" class="optionChild"></option>
 		</select>
		<input name="searchVal" required></input>
		<button type="submit">Search</button>

		<button type="reset">Clear</button>
	</form>
	
	<form action="/action_page.php">
		
	</form>
</body>
</html>