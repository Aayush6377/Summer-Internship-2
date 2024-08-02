<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Resources</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
            <span>GreenPath</span>
        </div>
        <nav>
            <ul>
                <li><a href="resource.php">Resources</a></li>
                <li><a href="tools.php">Tools</a></li>
                <li><a href="personal_health/personal_health.php">Personal Health</a></li>
                <li><a href="#">Wellness Programs</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">News</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                    <li class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>
</html>
