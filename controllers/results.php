<?php
session_start();

// die(var_dump($_SESSION['loggedin']));

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$results = $app['database']->findSearched('users');
	require 'views/results.view.php';
} else {
    echo ("<script LANGUAGE='JavaScript'>
	window.location.href='/login';
    alert('Please log in first.');
    </script>");
}

