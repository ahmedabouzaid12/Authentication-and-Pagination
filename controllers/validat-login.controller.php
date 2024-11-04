<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once(BASE_PATH . 'data/connection.php');
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim(htmlspecialchars($_POST['email']));
    $phone = trim(htmlspecialchars($_POST['phone']));

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    if (empty($phone)) {
        $errors['phone'] = 'Phone number is required';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: " . BASE_URL . "index.php?page=login");
        exit;
    }

    $query = "SELECT * FROM users WHERE email = ? AND phone = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $phone);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_logged_in'] = true; // Set session variable
        header("Location: " . BASE_URL . "index.php?page=home");
        exit;
    } else {
        $_SESSION['errors']['login'] = "Invalid email or phone number";
        header("Location: " . BASE_URL . "index.php?page=login");
        exit;
    }

    mysqli_stmt_close($stmt);
}
?>
