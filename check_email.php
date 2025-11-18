<?php
// Database connection
require_once('config.php');

// Check if email parameter was sent via POST
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    
    // Query database to see if email already exists
    $checkEmail = $db->prepare("SELECT email FROM eshop.users WHERE email = ?");
    $checkEmail->execute([$email]);
    
    // Return 'exists' if email found, 'available' if not
    if ($checkEmail->rowCount() > 0) {
        echo 'exists';
    } else {
        echo 'available';
    }
}
?>
