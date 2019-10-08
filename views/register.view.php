<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		<?php include 'views/css/style.css'; ?>
	</style>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<h1>Register</h1>
	<h3>Please, fill all the fields.</h3>
	
	<form method="POST" action="/adduser" id="register">
		<select>
    		<option value="frontend" class="optionGroup">Front End Developer</option>
    			<option value="angular" class="optionChild">&nbsp;Angular</option>
    		<option value="backend" class="optionGroup">Back End Developer</option>
				<option value="php" class="optionChild">&nbsp;PHP</option>
					<option value="symphony" class="optionChild2">&nbsp;&nbsp;Symphony</option>
						<option value="silex" class="optionChild3">&nbsp;&nbsp;&nbsp;Silex</option>
					<option value="laravel" class="optionChild2">&nbsp;&nbsp;Laravel</option>
						<option value="lumen" class="optionChild3">&nbsp;&nbsp;&nbsp;Lumen</option>
				<option value="nodejs" class="optionChild">&nbsp;NodeJs</option>
 		</select>
		<pre>E-mail:		<input type="email" name="email" placeholder="E-mail..." required></pre>
		<pre>Name:		<input type="text" name="name" placeholder="Name..." required></pre>
		<pre>Password:	<input type="password" name="password" placeholder="Password..." required></pre>
		<pre>Repeat Password:<input type="password" type="text" placeholder="Password..." required></pre>
		
		<button type="submit">Submit</button>
		<button type="reset">Clear</button>
	</form>
	<a href="/login">Already have account? Login here</a>
</body>
</html>