<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // You may want to perform validation and sanitation of the data here

    // Save data in sessions
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    $_SESSION["password"] = $password; // Store plain text password

    header("Location: loginn.blade.php");
    exit();

}
?>
