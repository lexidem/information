<?php
session_start(); // Start the session for dynamic content (login info)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Information System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header Section with Navigation -->
<header>
    <div class="container">
        <h1>My Information System</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content Section -->
<main>
    <div class="container">
        <h2>Welcome to the Information System</h2>
        <p>Our system offers a variety of services to make your work easier.</p>
        
        <?php if (!isset($_SESSION['username'])): ?>
            <!-- Display Login and Registration Forms if User is not Logged in -->
            <div class="auth-forms">
                <h3>Login</h3>
                <form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>

                <h3>Or Register</h3>
                <form action="register.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Register</button>
                </form>
            </div>
        <?php else: ?>
            <!-- Display Greeting if Logged In -->
            <h3>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
            <p>You are now logged in. Explore our features and enjoy the system.</p>
        <?php endif; ?>
    </div>
</main>

<!-- Footer Section -->
<footer>
    <div class="container">
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
        </ul>
    </div>
</footer>

</body>
</html>

