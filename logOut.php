<?php
    include('check.php');
    $loginst = 0;
    session_destroy();
    header("Location: index.php");
    exit();
?>