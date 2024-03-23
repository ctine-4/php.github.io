<?php
require_once('database_conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Email is not valid';
        exit; 
    }

    $query_username = "SELECT * FROM users WHERE username='$username'";
    $result_username = mysqli_query($conn, $query_username);

    if (mysqli_num_rows($result_username) > 0) {
        echo 'Username already exists. Please choose a different username.';
        exit;
    }

    $query_email = "SELECT * FROM users WHERE email='$email'";
    $result_email = mysqli_query($conn, $query_email);

    if (mysqli_num_rows($result_email) > 0) {
        echo 'Email already exists. Please use a different email.';
        exit;
    }

    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        echo 'Password should be at least 8 characters long and contain at least one uppercase, lowercase, digit, and special character.';
        exit;
    }

    if ($password !== $confirmPassword) {
        echo 'Passwords do not match. Please enter the same password in both fields.';
        exit;
    }

    $sql = "INSERT INTO users (firstname, lastname, username, email, password, confirmPassword) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$confirmPassword')";
    $insertResult = mysqli_query($conn, $sql);

    if ($insertResult) {
        echo 'Successfully Registered.';
    } else {
        echo 'There were errors while saving the data.';
    }
} else {
    echo 'No data';
}
?>
