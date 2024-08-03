<?php
include 'nav.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php'); 
    exit();
}

include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Stories</title>
    <link rel="stylesheet" href="../css/community.css">
</head>
<body>
    <div class="container">
        <h1>All Stories</h1>
        <section id="stories-list">
            <?php
            $result = $conn->query("SELECT * FROM user_stories ORDER BY created_at DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<div><strong>" . htmlspecialchars($row['username']) . ":</strong><p>" . htmlspecialchars($row['story']) . "</p></div>";
            }
            ?>
        </section>
    </div>
</body>
</
