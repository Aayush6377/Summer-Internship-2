<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Resources</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include "nav.php";
    ?>
    <main>
        <div class="content-wrapper">
            <section class="resources">
                <h2>Resources for Different Age Groups</h2>
                <ul>
                    <li>Child</li>
                    <li>Adolescent</li>
                    <li>Adult</li>
                    <li>Senior Citizen</li>
                </ul>
                <button>View More</button>
            </section>
            <div class="images">
                <div class="image">
                    <img src="img/fruits.jpg" alt="Image 1">
                </div>
            </div>
        </div>
        <section class="interactive-tools">
            <h2>Interactive Tools</h2>
            <ul>
                <li>BMI Calculator</li>
                <li>Fitness Tracker</li>
                <li>Symptom Checker</li>
            </ul>
            <button>View More</button>
        </section>
        
    </main>
    <?php include "footer.php";?>
</body>
</html>
