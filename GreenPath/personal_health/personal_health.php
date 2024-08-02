<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Health</title>
    <link rel="stylesheet" href="personal_health.css">
</head>
<body>
    <?php include 'nav.php'; ?>
    
    <header>
        <div class="header-content">
            <h1>Personal Health</h1>
            <div class="age-selector">
                <label for="age-group">Select Age Group:</label>
                <select id="age-group" name="age-group" onchange="updateContent()">
                    <option value="child">Child</option>
                    <option value="teen">Teen</option>
                    <option value="adult">Adult</option>
                    <option value="senior">Senior</option>
                </select>
            </div>
        </div>
    </header>
    
    <main>
        <section id="daily-tips">
            <h2>Daily Health Tips</h2>
            <div id="health-tips">
                <!-- AI-generated daily health tips will be inserted here -->
            </div>
        </section>

        <section id="exercise-routines">
            <h2>Exercise Routines</h2>
            <div id="exercise-content">
                <!-- AI-generated exercise routines will be inserted here -->
            </div>
        </section>

        <section id="meal-planning">
            <h2>Meal Planning</h2>
            <div id="meal-plans">
                <!-- AI-generated meal plans will be inserted here -->
            </div>
        </section>

        <section id="importance">
            <h2>Importance of Personal Health</h2>
            <p>
                <!-- AI-generated importance of personal health will be inserted here -->
            </p>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    
    <script>
        function updateContent() {
            var ageGroup = document.getElementById("age-group").value;
            var baseUrl = '../gemini/response.php';
            
            fetch(`${baseUrl}?query=write Daily Health Tips for ${ageGroup}`)
                .then(response => response.text())
                .then(data => document.getElementById('health-tips').innerHTML = data);

            fetch(`${baseUrl}?query=write Exercise Routines for ${ageGroup}`)
                .then(response => response.text())
                .then(data => document.getElementById('exercise-content').innerHTML = data);

            fetch(`${baseUrl}?query=write Meal Planning for ${ageGroup}`)
                .then(response => response.text())
                .then(data => document.getElementById('meal-plans').innerHTML = data);

            fetch(`${baseUrl}?query=write Importance of Personal Health for ${ageGroup}`)
                .then(response => response.text())
                .then(data => document.getElementById('importance').querySelector('p').innerHTML = data);
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateContent(); // Initial load
        });
    </script>
</body>
</html>
