<?php
include 'db.php'; // Adjust path if needed

$response = ['success' => false, 'message' => 'Invalid request'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pollId = intval($_POST['poll_id']);
    $optionIndex = intval($_POST['option_index']);

    // Start session and get user ID
    session_start();
    $userId = $_SESSION['user_id'];

    // Check if the user has already voted for this poll
    $checkVoteQuery = "SELECT COUNT(*) as count FROM poll_votes WHERE poll_id = $pollId AND user_id = $userId";
    $checkVoteResult = $conn->query($checkVoteQuery);
    $hasVoted = $checkVoteResult->fetch_assoc()['count'] > 0;

    if ($hasVoted) {
        // Update the existing vote
        $stmt = $conn->prepare("UPDATE poll_votes SET option_index = ? WHERE poll_id = ? AND user_id = ?");
        $stmt->bind_param('iii', $optionIndex, $pollId, $userId);
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = 'Vote updated successfully.';
        } else {
            $response['message'] = 'Failed to update your vote.';
        }
    } else {
        // Insert a new vote
        $stmt = $conn->prepare("INSERT INTO poll_votes (poll_id, option_index, user_id) VALUES (?, ?, ?)");
        $stmt->bind_param('iii', $pollId, $optionIndex, $userId);
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = 'Vote recorded successfully.';
        } else {
            $response['message'] = 'Failed to record vote.';
        }
    }
}

echo json_encode($response);
?>
