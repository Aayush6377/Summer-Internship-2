<?php
include 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $story = $_POST['story'];
    $user_id = $_SESSION['user_id'];

    // Insert story
    $stmt = $conn->prepare("INSERT INTO user_stories (username, story, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $username, $story);
    $stmt->execute();
    $stmt->close();

    header("Location: ../community.php");
}
?>
