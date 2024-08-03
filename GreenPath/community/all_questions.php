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
    <title>All Questions</title>
    <link rel="stylesheet" href="../css/community.css">
</head>
<body>
    <div class="container">
        <h1>All Questions</h1>
        <section id="questions-list">
            <?php
            $result = $conn->query("SELECT * FROM qa_questions ORDER BY created_at DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<div><h4>" . htmlspecialchars($row['question']) . "</h4>";
                $answers = $conn->query("SELECT * FROM qa_answers WHERE question_id = " . $row['id']);
                while ($answer = $answers->fetch_assoc()) {
                    echo "<p>" . htmlspecialchars($answer['answer']) . "</p>";
                }
                echo '<form action="submit_answer.php?page=0" method="post">';
                echo '<input type="hidden" name="question_id" value="' . $row['id'] . '">';
                echo '<textarea name="answer" placeholder="Write your answer here..." required></textarea>';
                echo '<button type="submit">Submit Answer</button>';
                echo '</form></div>';
            }
            ?>
        </section>
    </div>
</body>
</html>
