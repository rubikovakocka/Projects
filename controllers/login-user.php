<?php

session_start();

$pass = $app['database']->checkLog('users', [
	'email' => $_POST['email'],
	'password' => $_POST['password']
]);
// $ga = $_GET['searchVal'];
// die(var_dump($ga));
if($pass == true){
	$_SESSION['loggedin'] = true;

	if(isset($_SESSION['search'])){
		echo ("<script LANGUAGE='JavaScript'>
		window.location.href='/results';
	    alert('Successfuly logged in.');
	    </script>");
	}
    else{
    	echo ("<script LANGUAGE='JavaScript'>
		window.location.href='/';
	    alert('Successfuly logged in.');
	    </script>");
    }
}
else if($pass == false){
	echo ("<script LANGUAGE='JavaScript'>
	window.location.href='/login';
    alert('Wrong E-mail or Password, please try again.');
    </script>");
}