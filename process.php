<?php
session_start();
require_once('config.php');
?>
<?php

if (isset($_POST)) {

	$firstname 		= $_POST['first_name'];
	$lastname 		= $_POST['last_name'];
	$email 			= $_POST['email'];
	$password 		= $_POST['password'];
	$passwordConf 	= $_POST['pass-text'];
	$address        = $_POST['address'];
	$city           = $_POST['city'];
	$postalcode     = $_POST['postalcode'];
	$phonenumber	= $_POST['phonenumber'];

	// Check if passwords match
	if ($password !== $passwordConf) {
		$_SESSION['register_error'] = 'Passwords do not match. Please try again.';
		header("Location: Register.php");
		exit();
	}

	// Hash the password after validation
	$password 		= password_hash($password, PASSWORD_DEFAULT);

	// Check if email already exists (server-side validation)
	$checkEmail = $db->prepare("SELECT email FROM eshop.users WHERE email = ?");
	$checkEmail->execute([$email]);
	
	if ($checkEmail->rowCount() > 0) {
		$_SESSION['register_error'] = 'Email already exists. Please use a different email.';
		header("Location: Register.php");
		exit();
	}

	$sql = "INSERT INTO eshop.users (userId, firstname, lastname, email, password, address, city, postalcode, phonenumber) VALUES(?,?,?,?,?,?,?,?,?)";
	$stmtinsert = $db->prepare($sql);
	$result = $stmtinsert->execute([NULL, $firstname, $lastname, $email, $password, $address, $city, $postalcode, $phonenumber]);
	if ($result) {
		echo 'Successfully saved.';
		header("Location: index.php");
		exit();
	} else {
		echo 'There were erros while saving the data.';
	}
} else {
	echo 'No data';
}
?>