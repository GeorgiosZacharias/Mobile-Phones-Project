<?php
session_start();
include('loginCon.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT * FROM eshop.users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        session_regenerate_id(true);
        $_SESSION['email'] = $user['email'];

        if ($user['UserType'] === "Admin") {
            header("Location: pages/IndexLogged.php");
        } else {
            header("Location: pages/IndexLogged.php");
        }
        exit();
    } else {
        // Login failed - redirect back to login page with error
        $_SESSION['login_error'] = "Invalid email or password. Please try again.";
        header("Location: LogInPage.php");
        exit();
    }
}
