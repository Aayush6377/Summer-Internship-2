<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Resources</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/logo.png" alt="Logo">
            <span>GreenPath</span>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="../resource.php" class="<?php echo ($current_page == 'resource.php') ? 'active' : ''; ?>">Resources</a></li>
                <li><a href="../tools.php" class="<?php echo ($current_page == 'tools.php') ? 'active' : ''; ?>">Tools</a></li>
                <li><a href="personal_health.php" class="<?php echo ($current_page == 'personal_health.php') ? 'active' : ''; ?>">Personal Health</a></li>
                <li><a href="../wellness.php" class="<?php echo ($current_page == 'wellness.php') ? 'active' : ''; ?>">Wellness Programs</a></li>
                <li><a href="../community.php" class="<?php echo ($current_page == 'community.php') ? 'active' : ''; ?>">Community</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                    <li class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></li>
                    <li><a href="../logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="../signup.php">Sign Up</a></li>
                    <li><a href="../login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>
</html>
