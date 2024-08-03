<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question = $conn->real_escape_string($_POST['question']);
    $sql = "INSERT INTO qa_questions (question) VALUES ('$question')";
    if ($conn->query($sql) === TRUE) {
        header('Location: ../community.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
