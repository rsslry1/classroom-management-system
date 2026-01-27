<?php
// ==============================
// Simple Login Logic
// ==============================

// Hardcoded credentials (for demo purposes only)
$validUsername = "admin";
$validPassword = "password123";

// Variable to store message
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get user input safely
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Basic validation
    if (empty($username) || empty($password)) {
        $message = "Please fill in all fields.";
    }
    // Check credentials
    elseif ($username === $validUsername && $password === $validPassword) {
        $message = "Login successful! Welcome, $username.";
    }
    else {
        $message = "Invalid username or password.";
    }
}
?>