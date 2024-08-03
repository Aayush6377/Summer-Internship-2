<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Resources</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include "nav.php"; ?>
    <main>
        <div class="content-wrapper">
            <section class="resources">
                <h2>Resources for Different Age Groups</h2>
                <ul>
                    <li><a href="resources/child-healthy-eating.php">Child</a></li>
                    <li><a href="resources/adolescent-mental-health.php">Adolescent</a></li>
                    <li><a href="resources/adult-work-life-balance.php">Adult</a></li>
                    <li><a href="resources/senior-health-resources.php">Senior Citizen</a></li>
                </ul>
                <button><a href="resource.php">View More</a></button>
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
                <li><a href="tools/bmi_calculator.php">BMI Calculator</a></li>
                <li><a href="tools/fitness_tracker.php">Fitness Tracker</a></li>
                <li><a href="tools/symptom_checker.php">Symptom Checker</a></li>
            </ul>
            <button><a href="tools.php">View More</a></button>
        </section>
    </main>
    <?php include "footer.php"; ?>
</body>
</html>
