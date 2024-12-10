<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Dummy credentials for demonstration
    if ($username == "user" && $password == "password123") {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "<p>Invalid credentials, please try again.</p>";
    }
}
?>
