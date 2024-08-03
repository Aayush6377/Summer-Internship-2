<?php
include 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question_id = $_POST['question_id'];
    $answer = $_POST['answer'];
    $user_id = $_SESSION['user_id'];

    // Insert answer
    $stmt = $conn->prepare("INSERT INTO qa_answers (question_id, user_id, answer, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("iis", $question_id, $user_id, $answer);
    $stmt->execute();
    $stmt->close();

    if (isset($_GET['page'])){
        if ($_GET['page']==0){
            header("Location: all_questions.php");
        }
        
    }
    else{
        header("Location: ../community.php");
    }
}
?>
