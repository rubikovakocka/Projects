<?php


$router->get('', 'controllers/index.php');
$router->get('login', 'controllers/login.php');
$router->get('register', 'controllers/register.php');
$router->get('results', 'controllers/results.php');
$router->post('adduser', 'controllers/add-user.php');
$router->post('login-user', 'controllers/login-user.php');

