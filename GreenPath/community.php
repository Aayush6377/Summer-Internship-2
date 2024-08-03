<?php
include 'nav.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

include 'community/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link rel="stylesheet" href="css/community.css">
</head>
<body>
    <div class="container">
        <h1>Community</h1>
        <!-- User Stories -->
        <section id="user-stories">
            <h2>User Stories</h2>
            <div id="story-submission">
                <h3>Share Your Story</h3>
                <form id="story-form" action="community/submit_story.php" method="post">
                    <input type="text" name="username" placeholder="Your Name" required>
                    <textarea name="story" placeholder="Write your story here..." required></textarea>
                    <button type="submit">Submit Story</button>
                </form>
            </div>
            <div id="stories-list">
                <?php
                $result = $conn->query("SELECT * FROM user_stories ORDER BY created_at DESC LIMIT 2");
                while ($row = $result->fetch_assoc()) {
                    echo "<div><strong>" . htmlspecialchars($row['username']) . ":</strong><p>" . htmlspecialchars($row['story']) . "</p></div>";
                }
                ?>
                <a href="community/all_stories.php">View More</a>
            </div>
        </section>

        <!-- Q&A Section -->
        <section id="qa-section">
            <h2>Q&A Section</h2>
            <div id="ask-question">
                <h3>Ask a Question</h3>
                <form id="question-form" action="community/submit_question.php" method="post">
                    <textarea name="question" placeholder="Ask your question here..." required></textarea>
                    <button type="submit">Submit Question</button>
                </form>
            </div>
            <div id="questions-list">
                <?php
                $result = $conn->query("SELECT * FROM qa_questions ORDER BY created_at DESC LIMIT 2");
                while ($row = $result->fetch_assoc()) {
                    echo "<div><h4>" . htmlspecialchars($row['question']) . "</h4>";
                    $answers = $conn->query("SELECT * FROM qa_answers WHERE question_id = " . $row['id']);
                    while ($answer = $answers->fetch_assoc()) {
                        echo "<p>" . htmlspecialchars($answer['answer']) . "</p>";
                    }
                    echo '<form action="community/submit_answer.php" method="post">';
                    echo '<input type="hidden" name="question_id" value="' . $row['id'] . '">';
                    echo '<textarea name="answer" placeholder="Write your answer here..." required></textarea>';
                    echo '<button type="submit">Submit Answer</button>';
                    echo '</form></div>';
                }
                ?>
                <a href="community/all_questions.php">View More</a>
            </div>
        </section>

        <!-- Polls and Surveys -->
        <section id="polls-surveys">
            <h2>Polls and Surveys</h2>
            <div id="create-poll">
                <h3>Create a Poll</h3>
                <form id="poll-form" action="community/submit_poll.php" method="post">
                    <input type="text" name="poll-question" placeholder="Poll question" required>
                    <textarea name="poll-options" placeholder="Options (comma separated)" required></textarea>
                    <button type="submit">Create Poll</button>
                </form>
            </div>
            <div id="polls-list">
                <?php
                $result = $conn->query("SELECT * FROM polls ORDER BY created_at DESC LIMIT 2");
                while ($row = $result->fetch_assoc()) {
                    echo "<div><h4>" . htmlspecialchars($row['question']) . "</h4>";
                    $options = explode(',', $row['options']);
                    $totalVotesResult = $conn->query("SELECT COUNT(*) as total FROM poll_votes WHERE poll_id = " . $row['id']);
                    $totalVotes = $totalVotesResult->fetch_assoc()['total'];
                    foreach ($options as $index => $option) {
                        $optionVotesResult = $conn->query("SELECT COUNT(*) as count FROM poll_votes WHERE poll_id = " . $row['id'] . " AND option_index = " . $index);
                        $optionVotes = $optionVotesResult->fetch_assoc()['count'];
                        $percentage = $totalVotes > 0 ? ($optionVotes / $totalVotes) * 100 : 0;
                        echo "<p><input type='radio' name='poll_" . $row['id'] . "' value='" . $index . "'>" . htmlspecialchars($option) . " (" . round($percentage) . "%)</p>";
                    }
                    echo '<button onclick="submitVote(' . $row['id'] . ')">Vote</button>';
                    echo "</div>";
                }
                ?>
                <a href="community/all_polls.php">View More</a>
            </div>
        </section>

    </div>
    <script src="js/community.js"></script>
    <?php include "footer.php";?>
</body>
</html>
