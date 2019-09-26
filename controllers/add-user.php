<?php

session_start();

$app['database']->insert('users', [
	
	'email' => $_POST['email'],
	'name' => $_POST['name'],
	'password' => $_POST['password']
]);

header('Location: /login');