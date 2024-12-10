<?php
// Handle registration logic (this would involve adding the user to a database in a real system)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // For now, just a simple confirmation message
    echo "<p>Registration successful. You can now <a href='index.php'>login</a>.</p>";
}
?>
