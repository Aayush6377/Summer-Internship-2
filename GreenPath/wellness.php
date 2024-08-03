<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellness Program Quiz</title>
    <link rel="stylesheet" href="css/wellness.css">
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <h1>Wellness Program Quiz</h1>
        <section id="quiz-section">
            <div id="quiz-container">
                <div id="quiz">
                    <form id="quiz-form">
                        <div id="question-container"></div>
                        <button type="button" id="next-button" onclick="nextQuestion()">Next</button>
                    </form>
                </div>
                <div id="results" style="display:none;">
                    <h2>Quiz Results</h2>
                    <p id="result-text"></p>
                </div>
            </div>
        </section>
    </div>
    <script src="js/wellness.js"></script>
</body>
</html>
