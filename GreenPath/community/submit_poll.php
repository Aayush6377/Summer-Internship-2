<?php
include 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $poll_question = $_POST['poll-question'];
    $poll_options = $_POST['poll-options'];
    $user_id = $_SESSION['user_id'];

    // Insert poll
    $stmt = $conn->prepare("INSERT INTO polls (question, options, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $poll_question, $poll_options);
    $stmt->execute();
    $stmt->close();

    header("Location: ../community.php");
}
?>
