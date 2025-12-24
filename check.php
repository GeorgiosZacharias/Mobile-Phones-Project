<?php
/**
 * User Authentication and Authorization Check
 * 
 * This file verifies if a user is logged in and determines their access level.
 * It should be included in navigation.php to control menu visibility.
 * 
 * Flow:
 * 1. Starts/continues the session
 * 2. Checks if user email exists in session
 * 3. Queries database to verify user and get their role
 * 4. Sets $loginst variable based on user type
 * 
 * Variables set:
 * @var int $loginst - Login status indicator:
 *                     0 = Guest (not logged in)
 *                     1 = Regular User (logged in)
 *                     2 = Admin (logged in with elevated privileges)
 * 
 * @var string $login_user - Email of the logged-in user
 * @var array $row - Full user data from database
 */

include('loginCon.php');
session_start();
$loginst = 0;

if (isset($_SESSION['email'])){ 

	$email_check = $_SESSION['email'];

	// Query database to verify user and get their role
	$ses_sql = mysqli_query($con,"SELECT * FROM eshop.users WHERE email='$email_check' ");

	$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$login_user=$row['email'];

	// Set login status based on user type
	if(!empty($login_user) && $row['UserType']=="User") 
	{
	   $loginst = 1; // Regular user
	}
	else if(!empty($login_user) && $row['UserType']=="Admin")
	{
	    $loginst = 2; // Administrator
	}
}

?>