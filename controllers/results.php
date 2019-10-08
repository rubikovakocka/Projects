<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$results = $app['database']->findSearched('users');
	require 'views/results.view.php';
} else {
	$_SESSION['search'] = $_GET['searchVal'];
    echo ("<script LANGUAGE='JavaScript'>
	window.location.href='/login';
    alert('Please log in first.');
    </script>");
}

