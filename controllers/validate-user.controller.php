<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once(BASE_PATH . 'data/connection.php');
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));
    $phone = trim(htmlspecialchars($_POST['phone']));

    // Validation checks
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    } elseif (strlen($name) < 3) {
        $errors['name'] = 'Name must be at least 3 characters long';
    } elseif (strlen($name) > 15) {
        $errors['name'] = 'Name must not exceed 15 characters';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $errors['email'] = 'Email already exists';
        }
        $stmt->close();
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters long';
    }

    if (empty($phone)) {
        $errors['phone'] = 'Phone number is required';
    } elseif (!preg_match('/^[0-9]{10,15}$/', $phone)) {
        $errors['phone'] = 'Phone number must be between 10 and 15 digits';
    }

    // If there are no errors, insert into the database
    if (empty($errors)) {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the insert query
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $hashed_password, $phone);

        if ($stmt->execute()) {
            $_SESSION['success'] = "User added successfully";
        } else {
            $_SESSION['errors']['db'] = "Database error: Could not save user";
        }

        $stmt->close();
    } else {
        $_SESSION['errors'] = $errors;
    }

    header("Location: " . BASE_URL . "index.php?page=add-user");
    exit();
}
