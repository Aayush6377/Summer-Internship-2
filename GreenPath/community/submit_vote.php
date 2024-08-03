<?php
session_start();
include 'db.php'; // Ensure this path is correct

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pollId = intval($_POST['poll_id']);
    $optionIndex = intval($_POST['option_index']);
    $userId = $_SESSION['user_id'];

    // Check if the user has already voted
    $checkVote = $conn->query("SELECT * FROM poll_votes WHERE poll_id = $pollId AND user_id = $userId");
    
    if ($checkVote->num_rows > 0) {
        // Update the existing vote
        $stmt = $conn->prepare("UPDATE poll_votes SET option_index = ? WHERE poll_id = ? AND user_id = ?");
        $stmt->bind_param("iii", $optionIndex, $pollId, $userId);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            header("Location: ../community.php");
        } else {
            echo "Failed to update your vote.";
        }
    } else {
        // Insert a new vote
        $stmt = $conn->prepare("INSERT INTO poll_votes (poll_id, option_index, user_id) VALUES (?, ?, ?)");
        $stmt->bind_param("iii", $pollId, $optionIndex, $userId);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: ../community.php");
        } else {
            echo "Failed to submit your vote.";
        }
    }
}
?>
