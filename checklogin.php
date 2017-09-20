<?php
session_start();
ob_start();

$login= array(
	array(
		'admin', 'admin'
	),
	array(
		'user', 'user'
	),
	array(
		'other', 'other'
	)
);

$username = $_POST['username'];
$password = $_POST['password'];
 
if (in_array(array($username, $password), $login)) {
	$_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    header('location: index.php');

 } else {
 	header('location: login.php');
   	echo "Username o Password estan incorrectos.";

   	echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 ob_end_flush();
 ?>