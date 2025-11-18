<?php
include('loginCon.php');
session_start();
$loginst = 0;
if (isset($_SESSION['email'])){ 

$email_check = $_SESSION['email'];

$ses_sql = mysqli_query($con,"SELECT * FROM eshop.users WHERE email='$email_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['email'];

if(!empty($login_user) && $row['UserType']=="User") 
{
   $loginst = 1;
}
else if(!empty($login_user) && $row['UserType']=="Admin")
{
    $loginst = 2;
}
}

?>