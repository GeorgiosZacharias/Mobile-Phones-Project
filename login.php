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
    if ($user) {
        echo "User found: " . $user['email'];
    } else {
        echo "User not found in DB";
    }


    echo "<br>Input password: " . $password;
    echo "<br>DB password hash: " . $user['password'];

    if (password_verify($password, $user['password'])) {
        echo "<br>Password correct!";
    } else {
        echo "<br>Password incorrect!";
    }
    if ($user && password_verify($password, $user['password'])) {
        session_regenerate_id(true); // Security: prevent session fixation
        $_SESSION['email'] = $user['email'];


        if ($user['UserType'] === "Admin") {
            header("Location: pages/IndexLogged.php");
        } else {
            header("Location: pages/IndexLogged.php");
        }
        exit();
    } else {
        echo "Login failed. Invalid email or password.";
    }
}
