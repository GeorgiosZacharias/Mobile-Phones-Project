<?php
require_once('config.php');
?>
<?php

if (isset($_POST)) {

	$firstname 		= $_POST['first_name'];
	$lastname 		= $_POST['last_name'];
	$email 			= $_POST['email'];
	$password 		= $_POST['password'];
	$password 		= password_hash($password, PASSWORD_DEFAULT);
	$address        = $_POST['address'];
	$city           = $_POST['city'];
	$postalcode     = $_POST['postalcode'];
	$phonenumber	= $_POST['phonenumber'];

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