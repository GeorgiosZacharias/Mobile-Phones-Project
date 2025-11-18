<?php
$db_user = "root";
$db_pass = "YOUR_PASSWORD_HERE";
$db_name = "eshop";
$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
